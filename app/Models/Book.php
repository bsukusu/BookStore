<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Legalworks\IsbnTools\IsbnCast;

class Book extends Model
{
    use HasFactory;
    protected $table="book";
    protected $primarykey="id";
<<<<<<< HEAD
    // protected $fillable=["book_name","author_name","book_ibsn","image"];
    protected $guarded=["id"];
=======
    protected $fillable=["book_name","author_name","book_ibsn","image"];
  //  protected $casts = ["book_ibsn" => IsbnCast::class];
>>>>>>> 73f76ed63cf6dba1df56ebddb14dd0d6ea5cabaa
}
