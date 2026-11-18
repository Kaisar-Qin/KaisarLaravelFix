<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Siswa';
        $subtitle = 'Daftar data Siswa';
        $students = Student::latest('id')->paginate(10);

        return view('admin.student.index', [
            'title' => $title,
            'subtitle' => $subtitle,
            'students' => $students,
            'classrooms' => Classroom::orderBy('nama')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student.create', [
        'classrooms' => Classroom::orderBy('nama')->get(),
     ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nis' => 'required|integer|unique:students,nis',
            'classroom_id' => 'required|exists:classrooms,id',
            'address' => 'nullable|string|max:255',
        ],[
            'nama.required' => 'Nama siswa harus diisi.',
            'nis.required' => 'NIS siswa harus diisi.',
            'nis.numeric' => 'NIS siswa harus berupa angka.',
            'nis.unique' => 'NIS siswa sudah digunakan.',
            'classroom_id.required' => 'Kelas siswa harus dipilih.',
            'classroom_id.exists' => 'Kelas siswa tidak valid.',
            'address.max' => 'Alamat siswa tidak boleh lebih dari 255 karakter.',
        ]);

        Student::create($validated);
        return redirect()->route('admin.student.index')
        ->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
