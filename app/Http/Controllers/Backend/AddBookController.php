<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;

class AddBookController extends Controller
{
    public function index()
    {
        $categories = Category::getAllCategories();
        return view('backend.Add-book', compact('categories'));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'author_name' => 'required|string',
            'published_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required',
            'file_path' => 'nullable|file'
        ]);

        $book = new Books;
        $book->name = $request->input('name');
        $book->author_name = $request->input('author_name');
        $book->published_date = $request->input('published_date');
        $book->category_id = $request->input('category_id');
        $book->description = $request->input('description');

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = time(). '.' .$file->getClientOriginalExtension();
            $path = $file->storeAs('/uploads', $fileName, 'public');
            $book->file_path = $path;
            $url = Storage::url($path);
        }

        $book->downloadable = isset($request->downloadable) ? 1 : 0;
        $book->save();

        return redirect()->route('admin.add-book')->with('status', 'Book added successfully');
}
    public function download(Request $request, $id){
        $book = Books::findOrFail($id);
        $path = storage_path('app/public/'.$book->file_path);
        return response()->download($path);

    }
}
