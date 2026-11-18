<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index', [
            'title'    => 'Teachers',
            'subtitle' => 'Daftar data Guru',
            'teachers' => Teacher::with('subject')->get(),
            'subjects' => Subject::all(),
        ]);
    }
    public function create()
    {
        return view('admin.teacher.create', [
            'subjects' => Subject::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'niy'        => ['required', 'integer', 'min:1', 'unique:teachers,niy'],
            'name'       => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'start_date' => ['required', 'date'],
        ]);

        Teacher::create($validated);

        return redirect('/admin/teacher/index')
            ->with('success', 'Guru berhasil ditambahkan.');
    }
}
