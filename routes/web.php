<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::resource('/events', EventController::class);
Route::get('adminevents', [EventController::class, 'backindex'])->name('backindex');

Route::get('/about', [AboutController::class, 'index']);



Route::get('/restricted', function () {
    return "you can come in";
})->middleware('checkage');

Route::get('/fail', function () {
    return "request failed";
});


Route::get('/teacher/dashboard', function () {
    return "Welcome, Teacher!";
})->name('teacher.dashboard')->middleware('auth', 'ensurerole:teacher');

Route::get('/student/dashboard', function () {
    return "Welcome, Student!";
})->name('student.dashboard')->middleware('auth', 'ensurerole:student');


Route::get('/redirect', function(){

})->middleware('auth','checkrole');
