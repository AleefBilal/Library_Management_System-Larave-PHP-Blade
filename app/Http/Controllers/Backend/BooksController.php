<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
Use Illuminate\Contracts\View\Factory;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function view()
    {
        $books = Books::all();
        $data = compact('books');
        return view('backend.books')->with($data);
    }

    public function delete($id)
    {
        $book = Books::find($id);
        if (!is_null($book)){
            $book->delete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $book = Books::find($id);
        $categories = Category::all();
        return view('backend.update-book', compact('book', 'categories'));
//        $book = Books::find($id);
//        if(is_null($book)){
//            return redirect('books');
//        }
//        else{
//            $data = compact('book');
//            return view('backend.Add-book');
//        }
    }

    public function update(Request $request){
        $book = Books::find($request->id);
        $book->name = $request->name;
        $book->author_name = $request->author_name;
        $book->published_date = $request->published_date;
        $book->category_id = $request->category_id;
        $book->description = $request->description;

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time(). '.' .$file->getClientOriginalExtension();
            $path = $file->storeAs('/uploads', $fileName, 'public');
            $book->file_path = $path;
            $url = Storage::url($path);
        }

        $book->downloadable = isset($request->downloadable) ? 1 : 0;
        $book->save();
        return redirect()->route('books')->with('success', 'Book has been updated successfully');
    }
}
