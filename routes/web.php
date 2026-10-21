<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;

// Route::inertia('/', 'welcome')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/viewlayout', function () {
    return view('viewlayout');
});
Route::get('/admin.dashboard', [DashboardController::class, 'index']);

Route::get('/admin/Student', [StudentController::class, 'index']);

Route::get('/admin/Classroom', [ClassroomController::class, 'index']);
