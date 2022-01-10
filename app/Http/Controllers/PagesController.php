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

//

        /*
         *  Create
         *
         */
//            1 variant
//        $todo = new Todo();
//        $todo->title = 'Дочитать книгу';
//        $todo->note = 'Начиная с 99 страницы';
//
//          2 variant
//        $todo->save();
//        $todo = Todo::create([
//            'title' => '222',
//            'note' => 'new2'
//        ]);

        /*
         * Изменение данных
         */

        $todo = Todo::find(4);
        if ($todo) {

            $todo->status = 0;
            $todo->save();
        }

        /*
         * Удаление
         */
//        (Todo::find(4))->delete();

//        dd($todo);
        $todos = Todo::all();

        return view('todos', [
            'todos' => $todos
        ]);
    }

    public function todosDone ()
    {

        $todos = Todo::where('status', '1')->get();
        return view('todos_done', [
            'todos' => $todos
        ]);
    }

    public function todosNotDone()
    {
        $todos = Todo::where('status', '0')->get();
        return view('todos_not_done', [
            'todos' => $todos
        ]);
    }
}
