<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\userabout;
use App\Http\Controllers\usercontact;
use App\Http\Controllers\usercontact2;
use App\Http\Controllers\userservices;
use App\Http\Controllers\userblogs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[usercontroller::class,'getuser'])->name('/');
Route::get('about',[userabout::class,'about'])->name('about');
Route::get('contact',[usercontact::class,'contact'])->name('contact');
Route::get('service',[userservices::class,'service'])->name('service');
Route::get('blogs',[userblogs::class,'blogs'])->name('blogs');
Route::get('first',[userblogs::class,'firstblog'])->name('first');
Route::get('second',[userblogs::class,'secondblog'])->name('second');
Route::post('adduser',[usercontact::class,'adduser'])->name('adduser');
Route::get('showdata',[usercontact::class,'showdata'])->name('showdata');
Route::get('{id}/delete',[usercontact::class,'delete']);
Route::get('{id}/edit',[usercontact::class,'edit']);
Route::post('{id}/update',[usercontact::class,'update']);
Route::get('/ajaxpage',[usercontact2::class,'ajaxpage'])->name('ajaxpage');
//ajax
Route::post('savedataajax',[usercontact2::class,'savedataajax'])->name('savedataajax');
Route::post('editdataajax',[usercontact2::class,'editdataajax']);
Route::get('getdataajax',[usercontact2::class,'getdataajax']);
Route::post('/deletedata',[usercontact2::class,'deletedata']);

// Route::delete('/deleteproduct/{id}',[usercontact2::class,'deleteproduct']);