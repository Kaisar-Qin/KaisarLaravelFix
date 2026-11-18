<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index()
   {
        $title ='Dashborard';
        $content = 'Selamat Datang di halaman admin';
        return view('admin.dashboard', [
        'title' => $title, 
        'content' => $content]);
   }
}
