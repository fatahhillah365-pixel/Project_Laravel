<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = [
            [
            'title' => 'About',
            'nama' => 'Muhammad Ahsan Fatahillah',
            'kelas' =>'11 PPLG 3',
            'repositori' => 'https://github.com/fatahhillah365-pixel?tab=repositories'
            ],
            ];

        return view('admin.About',[
            'about' => $about
        ]);

    }
}
