<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DiscusFController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;



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

//[http://127.0.0.1:8000]//
Route::get('/', function () {
    return view('welcome');
});

//[http://127.0.0.1:8000/payment]//
Route::resource('Payment',PaymentController::class);
Route::get('payment', [PaymentController::class, 'index'])->name('pymnt.index');
Route::get('payment/create', [PaymentController::class, 'create'])->name('pymnt.create');
Route::post('payment', [PaymentController::class, 'store'])->name('pymnt.store');
Route::get('payment/{id}/edit', [ProductController::class, 'edit'])->name('pymnt.edit');
Route::put('payment/{id}', [ProductController::class, 'update'])->name('pymnt.update');
Route::delete('payment/{id}', [ProductController::class, 'destroy'])->name('pymnt.destroy');

//[http://127.0.0.1:8000/Course]//
Route::resource('Course',CourseController::class);
Route::get('Course', [CourseController::class, 'index'])->name('Course.index');
Route::get('Course/create', [CourseController::class, 'create'])->name('Course.create');
Route::post('Course', [CourseController::class, 'store'])->name('Course.store');
Route::get('Course/{id}/edit', [CourseController::class, 'edit'])->name('Course.edit');
Route::put('Course/{id}', [CourseController::class, 'update'])->name('Course.update');
Route::delete('Course/{id}', [CourseController::class, 'destroy'])->name('Course.destroy');

//[http://127.0.0.1:8000/Lesson]//
Route::resource('Lesson',LessonController::class);
Route::get('Lesson', [LessonController::class, 'index'])->name('Lesson.index');
Route::get('Lesson/create', [LessonController::class, 'create'])->name('Lesson.create');
Route::post('Lesson/create', [LessonController::class, 'store'])->name('Lesson.store');
Route::get('Lesson/{id}/edit', [LessonController::class, 'edit'])->name('Lesson.edit');
Route::put('Lesson/{id}', [LessonController::class, 'update'])->name('Lesson.update');
Route::delete('Lesson/{id}', [LessonController::class, 'destroy'])->name('Lesson.destroy');

//[http://127.0.0.1:8000/Assignment]//
Route::resource('Assignment',AssignmentController::class);
Route::get('Assignment', [AssignmentController::class, 'index'])->name('Assignment.index');
Route::get('Assignment/create', [AssignmentController::class, 'create'])->name('Assignment.create');
Route::post('Assignment', [AssignmentController::class, 'store'])->name('Assignment.store');
Route::get('Assignment/{id}/edit', [AssignmentController::class, 'edit'])->name('Assignment.edit');
Route::put('Assignment/{id}', [AssignmentController::class, 'update'])->name('Assignment.update');
Route::delete('Assignment/{id}', [AssignmentController::class, 'destroy'])->name('Assignment.destroy');

//[http://127.0.0.1:8000/DiscusF]//
Route::resource('DiscusForum',DiscusFController::class);
Route::get('DiscusForum', [DiscusFController::class, 'index'])->name('DiscusF.index');
Route::get('DiscusForum/create', [DiscusFController::class, 'create'])->name('DiscusF.create');
Route::post('DiscusForum', [DiscusFController::class, 'store'])->name('DiscusF.store');
Route::get('DiscusForum/{id}/edit', [DiscusFController::class, 'edit'])->name('DiscusF.edit');
Route::put('DiscusForum/{id}', [DiscusFController::class, 'update'])->name('DiscusF.update');
Route::delete('DiscusForum/{id}', [DiscusFoController::class, 'destroy'])->name('DiscusF.destroy');

//[http://127.0.0.1:8000/User]//
Route::resource('User',UserController::class);
Route::get('User', [UserController::class, 'index'])->name('User.index');
Route::get('User/create', [UserController::class, 'create'])->name('User.create');
Route::post('User', [UserController::class, 'store'])->name('User.store');
Route::get('User/{id}/edit', [UserController::class, 'edit'])->name('User.edit');
Route::put('User/{id}', [UserController::class, 'update'])->name('User.update');
Route::delete('User/{id}', [UserController::class, 'destroy'])->name('User.destroy');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
