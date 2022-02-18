<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function create()
    {
        return view('admin.book_create');
    }

    public function bookCreate(BookRequest $request)
    {
        if ($request->image) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
        }
        Book::create([
      'name' =>$request->name,
      'author_name'=>$request->author_name,
      'isbn'=>$request->isbn,
      'image'=>$filename ?? null
      ]);
        return redirect('adminpanel')->with('message', 'successfully created.');
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
                 'author_name'=>$request->author_name,
                 'isbn'=>$request->isbn,
                 'image'=>$filename ?? $book->image
                 ]);
        ;
        return redirect('adminpanel')->with('message', 'successfully updated.');
    }
    public function updateForm(Book $book)
    {
        return view('book_update', compact('book'));
    }
    public function show()
    {
        $books = Book::all();
        return view('admin.booklist', compact('books'));
    }
    public function bookshow()
    {
        $books = Book::all();
        return view('admin.adminpanel', compact('books'));
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('adminpanel')->with('message', 'successfully deleted.');
    }
}
