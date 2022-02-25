<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

/*
| Web Routes
|--------------------------------------------------------------------------
|3
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::redirect('/', '/homepage');
Route::get('/homepage', function(){return view('homepage');})->name('homepage');
Route::get("/books", [BookController::class,'index'])->name('books');

Route::middleware(['auth'])->group(function(){
  //CRUD
  Route::get("/books/create",[BookController::class,'create'])->name('create');
  Route::post("/books",[BookController::class,'store'])->name('book-create');
  Route::put('books/{book}',[BookController::class,'update'])->name('book-update');
  Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('update');
  Route::delete('/books/{book}',[BookController::class,'destroy'])->name('delete');

//Author
  Route::get("/authors",[AuthorController::class,'index'])->name('authors');
  Route::get("/authors/create",[AuthorController::class,'create'])->name('authors-create');
  Route::post("/authors",[AuthorController::class,'store'])->name('author-create');
  Route::delete('/authors/{author}',[AuthorController::class,'destroy'])->name('author-delete');
  Route::put('authors/{author}',[AuthorController::class,'update'])->name('authors-update');
  Route::get('/authors/{author}/edit',[AuthorController::class,'edit'])->name('author-update');
});
