<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About';
        $nama = 'Kaisar Deno Ankabut';
        $hobby = 'Mendengarkan Musik, Menggambar';
        $repository = 'Kaisar-Qin';
        return view('admin.about', [
            'title' => $title, 
            'nama' => $nama, 
            'hobby' => $hobby,
            'repository' => $repository]);
    }
}
