<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
  public function create()
  {
    return view('Insert');
  }

  public function bookcreate(BookRequest $request)
  {
    $book_name= $request->book_name;
    $author_name=$request->author_name;
    $book_ibsn=$request->book_ibsn;
    $image=$request->image;

    Book::create([
      'book_name' =>$request->book_name,
      'author_name'=>$request->author_name,
      'book_ibsn'=>$request->book_ibsn,
      'image'=>$request->image
      ] );
    }

        public function update(BookRequest $request)
           {
                   $book = Book::find($id);
                   $book->book_name = $request->book_name;
                   $book->author_name = $request->author_name;
                   $book->book_ibsn = $request->isbn_number;
                   if ($request->hasFile('image')) {
                       $imageName = str_slug($request->name).'.'.$request->image->getClientOriginalExtension();
                       $request->image->move(public_path('uploads'), $imageName);
                       $book->image = 'uploads/'.$imageName;
                   }
                   $book->save();
                   return redirect()->back();
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
        public function destroy(Book $id)
    {
       $book = Book::find($id);
       Book::where('id', $id)->delete();
   }
}
