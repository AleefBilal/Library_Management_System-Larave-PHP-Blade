<?php

namespace App\Http\Controllers\Frontend\Collections;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BusinessAdminisController extends Controller
{
    public function index()
    {
        $search = $request['search'] ?? "";
    
        $category = Category::findorfail(2);
    
        $books = $category->books();
        
        if($search != ""){
            $books = $books->where('name', 'LIKE', "%$search%")->orWhere('author_name', 'LIKE', "%$search%");
        }
    
        $books = $books->get();
    
        return view('frontend.collections.businessadminis', compact('category', 'books', 'search'));
    }
}
