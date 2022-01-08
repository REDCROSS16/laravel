<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/hello', [PagesController::class, 'helloPage'] );
Route::get('/test', [PagesController::class, 'testPage'] );


//Route::get('/post/{id}', function ($id) {
//   return 'page id = ' . $id ;
//});
//
//
//Route::get('/first-page', function () {
//    return '<h1 style="font-family: Arial;">This is my first page in Laravel</h1>';
//});
