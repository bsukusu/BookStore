<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class CrudOperator extends Controller
{

  public function create()
  {
    return view('Insert');
  }

  public function bookcreate(Request $request)
  {
    $book_name= $request->book_name;
    $author_name=$request->author_name;
    $book_ibsn=$request->book_ibsn;
    $image=$request->image;

    Book::create([
      'book_name' =>$book_name,
      'author_name'=>$author_name,
      'book_ibsn'=>$book_ibsn,
      'image'=>$image
      ] );
    }
  }
