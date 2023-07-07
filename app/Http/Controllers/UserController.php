<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return View('admin.users.index')
            ->with('users', User::orderBy('created_at', 'desc')->get());
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

       $user = new User();
                $user->name = $request->get('name');
                $user->email = $request->get('email');
                $user->role = $request->get('role');
                $user->password = bcrypt($request->get('password'));
                $user->save();
                return back();

    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            return view('admin.users.read')->with('users', User::where('id', $user->id)->orderBy('created_at', 'desc'));
        } else {
            return view('admin.users.read');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('users', User::where('id', $id)->get());
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
                $user->name = $request->get('name');
                $user->email= $request->get('email');
                $user->role = $request->get('role');
                $user->password = bcrypt($request->get('password'));
                $user->save();
                return back();

    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return back();
    }
}
