<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Validation\Rule;

class ClassroomController extends Controller
{
    public function index()
    {
        $title = 'Classroom';
        $subtitle = 'Daftar data Classroom';
        $classrooms = Classroom::all();
        return view('admin.classroom.index', [
            'title' => $title,
            'subtitle' => $subtitle,
            'classrooms' => $classrooms
        ]);
    }

     public function create()
    {
        return view('admin.classroom.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'  => ['required', 'string', 'max:255', 'unique:classrooms,nama'],
            'major' => ['required', Rule::in(['PPLG', 'ANIMASI', 'DKV'])],
        ]);

        Classroom::create($validated);

        return redirect('/admin/classroom/index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }
}
