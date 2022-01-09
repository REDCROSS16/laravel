<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function helloPage()
    {
        return view('hello', [
        'name' => 'Alexander',
        'skills' => ['HTML5', 'CSS3', 'VueJS', 'PHP' ],
    ]);
    }

    public function todos()
    {

        $todo = new Todo();
        $todo->title = 'Дочитать книгу';
        $todo->note = 'Начиная с 99 страницы';

        $todo->save();

        return view('todos');
    }
}
