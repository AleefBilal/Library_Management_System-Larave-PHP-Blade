<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function loginView()
    {
        if ( Auth::check() && Auth::user()->isAdmin() ) {
            return redirect()->route('admin.dashboard');
        }
        return view('backend.Adminlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $authUser = Auth::user();
            if ($authUser->isAdmin()) {
                return redirect()->route('admin.dashboard')->with('success', 'Login Successfully');
            }
        } else {
            Auth::logout();
            return redirect()->back()->with('error', 'Invalid Login Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('login.view'));
    }

}
