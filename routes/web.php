<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontrol;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudOperator;

/*
|--------------------------------------------------------------------------
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
Route::get('/booklist', function(){return view('booklist');})->name('booklist');


Route::get("/adminpanel", [Admincontrol::class,'admin'])->name('adminpanel');
Route::get("/logout",[Admincontrol::class,'logout'])->name('logout');
Route::get("/AdminCrudInsert",[CrudOperator::class,'create'])->name('Insert');
Route::post("/AdminCrudInsert",[CrudOperator::class,'bookcreate'])->name('BookCreate');
Route::get("/AdminCrudUpdate",[CrudOperator::class,'update'])->name('Update');
Route::get("/AdminCrudDelete",[CrudOperator::class,'delete'])->name('Delete');
