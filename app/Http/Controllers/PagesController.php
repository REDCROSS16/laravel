<?php

namespace App\Http\Controllers;

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

    public function testPage()
    {
        return view('test');
    }
}
