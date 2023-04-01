<?php

namespace App\Http\Controllers\frontend\collections;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
//     public function index(Request $request)
//     {
//         $search = $request['search'] ?? "";
//         if($search != ""){
//             $book = Books::where('name', 'LIKE', "%$search%")->orWhere('author_name', 'LIKE', "%$search%") ->get();
//         }
//         else{
//             $book = Books::all();
//         }
//         $category = Category::findorfail(1);
// //
//         return view('frontend.collections.accounting', compact('category', 'search'));
//     }
public function index(Request $request)
{
    $search = $request['search'] ?? "";
    
    $category = Category::findorfail(1);

    $books = $category->books();
    
    if($search != ""){
        $books = $books->where('name', 'LIKE', "%$search%")->orWhere('author_name', 'LIKE', "%$search%");
    }

    $books = $books->get();

    return view('frontend.collections.accounting', compact('category', 'books', 'search'));
}


}
