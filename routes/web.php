<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/blog', [PagesController::class, 'blogPage'])->name('blog')->middleware('admin')->middleware('auth');
Route::get('/blog/article/{id}', [PagesController::class, 'articlePage']);

Route::post('/article', [ArticlesController::class, 'store']);
Route::post('/article/delete', [ArticlesController::class, 'destroy']);
Route::get('/article/{id}/update', [PagesController::class, 'articleUpdatePage']);
Route::post('/article/update', [ArticlesController::class, 'update']);


//Route::get('/post/{id}', function ($id) {
//   return 'page id = ' . $id ;
//});
//
//
//Route::get('/first-page', function () {
//    return '<h1 style="font-family: Arial;">This is my first page in Laravel</h1>';
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('auth');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
