<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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

Route::get('/master',[PageController::class,'getIndex']);
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);
// Route::get('/loai_sanpham',[PageController::class,'getLoaiSp']);
Route::get('/chitiet_sanpham',[PageController::class,'geChitiet']);
Route::get('/lienhe',[PageController::class,'geLienhe']);
Route::get('/about',[PageController::class,'getAbout']);


