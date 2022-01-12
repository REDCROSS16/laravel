<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentsController extends Controller
{
    public function showAll()
    {
        $students = Student::all();

        return view('students',
        [
            'students' => $students,
            'title' => 'Все студенты'
        ]);
    }

    public function add()
    {

        $specialities = ['агроном', 'водопроводчик', 'электрик', 'связист'];

        $student = Student::create([
           'first_name'   => Str::random(10),
           'last_name'    => Str::random(10),
           'age'          => mt_rand(20, 30),
           'group_number' => mt_rand(1,5),
           'course_number'=> mt_rand(1,5),
           'specialty'    => $specialities[array_rand($specialities)],
        ]);

        $student->save();

        return view('addstudent', [
            'title' => 'добавить студента'
        ]);
    }
}
