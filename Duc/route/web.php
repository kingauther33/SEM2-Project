<?php

use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Front\HomeController::class, 'index']);

Route::get('/courses', [Front\CourseController::class, 'course']);

Route::get('/about', [Front\CourseController::class, 'about']);

Route::get('/contact', [Front\CourseController::class, 'contact']);

Route::get('/login', [Front\HomeController::class, 'login']);

Route::get('/admin', [Front\HomeController::class, 'admin']);

Route::get('/staff', [Front\HomeController::class, 'staff']);

Route::get('/student', [Front\HomeController::class, 'student']);

Route::get('/class', [Front\HomeController::class, 'class']);

Route::get('/addstudent', [Front\HomeController::class, 'addStudent']);

Route::get('/addcourse', [Front\HomeController::class, 'addCourse']);

Route::get('/addprofessor', [Front\HomeController::class, 'addProfessor']);
