<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'index']);

Route::get('admin/student/index', [StudentController::class, 'index'])
->name('admin.student.index');

Route::get('admin/student/create', [StudentController::class, 'create'])
->name('admin.student.create');

Route::post('admin/student/store', [StudentController::class, 'store'])
->name('admin.student.store');

Route::get('admin/classroom/index', [ClassroomController::class, 'index'])
->name('admin.classroom.index');

Route::get('admin/classroom/create', [ClassroomController::class, 'create'])
->name('admin.classroom.create');

Route::post('admin/classroom/store', [ClassroomController::class, 'store'])
->name('admin.classroom.store');

Route::get('admin/teacher/index',     [TeacherController::class, 'index'])
->name('admin.teacher.index');
Route::get('admin/teacher/create',    [TeacherController::class, 'create'])
->name('admin.teacher.create');
Route::post('admin/teacher/store',    [TeacherController::class, 'store'])
->name('admin.teacher.store');

Route::get('admin/subject/index',     [SubjectController::class, 'index'])
->name('admin.subject.index');
route::get('admin/subject/create',    [SubjectController::class, 'create'])
->name('admin.subject.create');
route::post('admin/subject/store',    [SubjectController::class, 'store'])
->name('admin.subject.store');


