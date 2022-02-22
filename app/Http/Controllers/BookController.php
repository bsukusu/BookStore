<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function create(Author $authors)
    {
        $authors = Author::all();
        return view('admin.book_create', compact('authors'));
    }

    public function store(BookRequest $request)
    {
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        Book::create([
      'name' =>$request->name,
      'author_id'=>$request->author_id,
      'isbn'=>$request->isbn,
      'image'=>$filename ?? null
      ]);
        return redirect('books')->with('message', 'successfully created.');
    }

    public function update(BookRequest $request, Book $book)
    {
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        $book->update([
                 'name' =>$request->name,
                 'author_id'=>$request->author_id,
                 'isbn'=>$request->isbn,
                 'image'=>$filename ?? $book->image
                 ]);
        return redirect('books')->with('message', 'successfully updated.');
    }
    public function edit(Book $book, Author $authors)
    {
        $authors = Author::all();
        return view('admin.book_update', compact(['books,author']));
    }
    public function show()
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
