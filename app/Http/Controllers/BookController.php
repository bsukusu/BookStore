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
    return view('Insert');
  }

  public function bookCreate(BookRequest $request)
  {
    if ($request->image){
      $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
}
    Book::create([
      'book_name' =>$request->book_name,
      'author_name'=>$request->author_name,
      'book_ibsn'=>$request->book_ibsn,
      'image'=>$filename ?? null
      ] );
    }

        public function update(BookRequest $request, Book $book)
           {
                   $book->book_name = $request->book_name;
                   $book->author_name = $request->author_name;
                   $book->book_ibsn = $request->book_ibsn;
                   if ($request->hasFile('image')) {
                       $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
                       $request->image->move(public_path('uploads'), $imageName);
                       $book->image = 'uploads/'.$imageName;
                   }
                   $book->save();
                   return redirect('adminpanel');
           }
           public function updateForm(Book $book)
           {
             return view('update',compact('book'));
           }
           public function show()
      {
        $books = Book::all();
        return view('booklist', compact('books'));
      }
        public function bookshow()
        {
          $books = Book::all();
          return view('adminpanel', compact('books'));
        }
        public function destroy(Book $book)
    {
        $book->delete();
       return redirect('adminpanel');
   }
}
