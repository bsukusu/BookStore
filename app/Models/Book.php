<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use Legalworks\IsbnTools\IsbnCast;

class Book extends Model
{
    use HasFactory;
    protected $table="books";
    protected $fillable=["id","name","author_name","isbn","image"];
}
