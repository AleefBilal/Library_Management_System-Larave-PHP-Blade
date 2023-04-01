<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AdminProfileController extends Controller
{
    public function profile()
    {
    return view('backend.profile');
    }

    public function updateProfile(Request $request)
    {
        $users = auth()->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $users->id,
            'password' => 'required|string|min:8|confirmed',
        ]);
        $current_password = \auth()->user()->password;
        if (request('password')) {
            $current_password = Hash::make($request->password);
        }

        if (!Hash::check($request->old_password, \auth()->user()->password)) {
            return back();
        } else
            $users->update([
                'email' => $request->email,
                'name' => $request->name,
                'password' => $current_password
            ]);
        return redirect(route('admin.dashboard'));
    }
}

