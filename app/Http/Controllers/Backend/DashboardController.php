<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Books;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::where('is_admin', 0)->count();
        $eBooksCount = Books::where('downloadable', 1)->count();
        $physicalBooksCount = Books::where('downloadable', 0)->count();
        $messagesCount = Contact::count();
        $usersCount = User::count();

        return view('backend.dashboard', compact('users', 'eBooksCount', 'physicalBooksCount', 'messagesCount', 'usersCount'));
    }
}
