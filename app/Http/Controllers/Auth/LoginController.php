<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        // validate the form data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ]);
        if (empty($request->email) && empty($request->password)) {
            return back();
        } elseif ($validator->fails()) {
            return back();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

                return redirect('/admin-dash');
            } elseif (!Auth::attempt()) {
                return redirect('/login');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('data');
        return redirect('login');
    }
}
