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

Route::get('/homepage', function(){return view('homepage');})->name('homepage');
Route::get("/booklist",[BookController::class,'show'])->name('show');
Route::get('/booklist', function(){return view('booklist');})->name('booklist');

//Admin kısmı
Route::get("/adminpanel", [Admincontrol::class,'admin'])->name('adminpanel')->middleware('auth');
Route::get("/adminpanel", [BookController::class,'bookShow'])->name('adminpanel')->middleware('auth');
Route::get("/logout",[Admincontrol::class,'logout'])->name('logout');

//CRUD
Route::get("/book/create",[BookController::class,'create'])->name('Insert')->middleware('auth');
Route::post("/book-create",[BookController::class,'bookCreate'])->name('book-create')->middleware('auth');
Route::put('bookupdate/{book}',[BookController::class,'update'])->name('update')->middleware('auth');
Route::get('/book/{book}/edit',[BookController::class,'updateForm'])->name('updateform')->middleware('auth');
Route::delete('/bookdelete/{book}',[BookController::class,'destroy'])->name('delete')->middleware('auth');
