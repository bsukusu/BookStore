<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use Legalworks\IsbnTools\IsbnCast;

class Book extends Model
{
    use HasFactory;
    protected $guarded=[]; 
    public function author()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
