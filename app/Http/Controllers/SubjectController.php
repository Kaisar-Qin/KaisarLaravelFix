<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return view('admin.subject.index', [
            'title'    => 'Subjects',
            'subtitle' => 'Daftar data Mapel',
            'subjects' => Subject::with('teacher')->get(),
        ]);
    }
     public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:subjects,name'],
        ]);

        Subject::create($validated);

        return redirect('/admin/subject/index')
            ->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }
}
