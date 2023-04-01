<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return redirect(route('admin.dashboard'));
        } else {
            return view('frontend.home');
        }
    }
}
