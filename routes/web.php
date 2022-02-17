<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontrol;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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
Route::get("/book-list",[BookController::class,'show'])->name('booklist');
//Route::get('/book-list', function(){return view('booklist');})->name('booklist');

Route::middleware(['auth'])->group(function(){
  Route::get("/adminpanel", [Admincontrol::class,'admin'])->name('adminpanel');
  Route::get("/adminpanel", [BookController::class,'bookShow'])->name('adminpanel');
  //Route::get("/logout",[Admincontrol::class,'logout'])->name('logout');
  //CRUD
  Route::get("/book/create",[BookController::class,'create'])->name('create');
  Route::post("/book-create",[BookController::class,'bookCreate'])->name('book-create');
  Route::put('book/update/{book}',[BookController::class,'update'])->name('update');
  Route::get('/book/{book}/edit',[BookController::class,'updateForm'])->name('updateform');
  Route::delete('/book/delete/{book}',[BookController::class,'destroy'])->name('delete');
});
