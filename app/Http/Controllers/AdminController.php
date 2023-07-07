<?php

namespace App\Http\Controllers;

use App\Unit;
use App\User;
use App\Tenant;
use App\Vehicle;
use App\Personne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function login_form()
    {
        return view('auth.login');
    }

    public function index(Request $request)
    {
        $user = $request->user()->role;
                return view('admin.index')
                    ->with('users', User::orderBy('created_at', 'desc')->get())
                    ->with('personne', Personne::orderBy('created_at', 'desc')->get());

        }
    }

