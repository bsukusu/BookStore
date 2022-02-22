<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use Legalworks\IsbnTools\IsbnCast;

class Book extends Model
{
    use HasFactory;
    protected $fillable=["id","name","author_id","isbn","image"];

    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
