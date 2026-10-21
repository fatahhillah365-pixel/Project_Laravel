<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\classroom;

class ClassroomController extends Controller
{
    public function index()
    {
    $classrooms = Classroom::all();
    return view('admin.Classroom',[
        'title' => 'classroom',
        'classrooms' => $classrooms
    ]);
    }
}
