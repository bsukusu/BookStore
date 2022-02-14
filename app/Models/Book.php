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
    // protected $fillable=["book_name","author_name","book_ibsn","image"];
    protected $guarded=["id"];
}
