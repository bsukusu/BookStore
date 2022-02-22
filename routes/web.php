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
Route::get("/book/list",[BookController::class,'show'])->name('books');

Route::middleware(['auth'])->group(function(){
  Route::get("/adminpanel", [BookController::class,'bookShow'])->name('adminpanel');
  //CRUD
  Route::get("/books/create",[BookController::class,'create'])->name('create');
  Route::post("/books",[BookController::class,'store'])->name('book-create');
  Route::put('books/{book}',[BookController::class,'update'])->name('update');
  Route::get('/books/{book}/edit',[BookController::class,'edit'])->name('book-update');
  Route::delete('/books/{book}',[BookController::class,'destroy'])->name('delete');

//Author
  Route::get("/authors",[AuthorController::class,'show'])->name('authors');
  Route::get("/authors/create",[AuthorController::class,'create'])->name('authorcreate');
  Route::post("/authors",[AuthorController::class,'store'])->name('author-create');
  Route::delete('/authors/{authtor}',[AuthorController::class,'destroy'])->name('author-delete');
  Route::put('authors/{author}',[AuthorController::class,'update'])->name('authorupdate');
  Route::get('/authors/{author}/edit',[AuthorController::class,'edit'])->name('author-update');
});
