<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;

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


Route::get('/todos', [PagesController::class, 'todos'] );
Route::get('/todos/done', [PagesController::class, 'todosDone'] );
Route::get('/todos/not-done', [PagesController::class, 'todosNotDone'] );

Route::get('/students', [StudentsController::class, 'showAll']);
Route::get('/students/add', [StudentsController::class, 'add']);


//Route::get('/post/{id}', function ($id) {
//   return 'page id = ' . $id ;
//});
//
//
//Route::get('/first-page', function () {
//    return '<h1 style="font-family: Arial;">This is my first page in Laravel</h1>';
//});
