<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function create()
    {
        $authors = Author::all();
        return view('admin.book_create', compact('authors'));
    }

    public function store(BookRequest $request)
    {
        $filename = null;
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        Book::create([
      'name' =>$request->name,
      'author_id'=>$request->author_id,
      'isbn'=>$request->isbn,
      'image'=>$filename
      ]);
        return redirect('books')->with('message', 'successfully created.');
    }

    public function update(BookRequest $request, Book $book)
    {
        $filename = $book->name;
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        $book->update([
                 'name' =>$request->name,
                 'author_id'=>$request->author_id,
                 'isbn'=>$request->isbn,
                 'image'=>$filename
                 ]);
        return redirect('books')->with('message', 'successfully updated.');
    }
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('admin.book-update', compact(['book','authors']));
    }
    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books')->with('message', 'successfully deleted.');
    }
}
