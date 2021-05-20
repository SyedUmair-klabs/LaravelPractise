<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::view('/upload','upload');
Route::get('/show',[Usercontroller::class,'save']);
// Route::get('/list',[Usercontroller::class,'save']);
// Route::get('/delete/{roll}',[Usercontroller::class,'delete']);
// Route::get('/edit/{id}',[Usercontroller::class,'edit']);

// Route::post('/edit',[Usercontroller::class,'update']);




