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


//// *** De kiem tra du lieu voi Model da chuan chua (JSON Formatter)
//Route::get('/', function () {
//    return \App\Models\Exam::find(1)->exam_type;
//});

Route::get('/', [Front\HomeController::class, 'index']);

Route::get('/courses', [Front\CourseController::class, 'course']);

Route::get('/about', [Front\CourseController::class, 'about']);

Route::get('/contact', [Front\CourseController::class, 'contact']);

// HIEU

Route::get('/faq', [Front\CourseController::class, 'faq']);

Route::get('/entrance_exam', [Front\CourseController::class, 'entrance_exam']);

Route::get('/search_exam', [Front\CourseController::class, 'search_exam']);

// DUC

Route::get('/login', [Front\HomeController::class, 'login']);

Route::get('/admin', [Front\AdminController::class, 'admin']);

Route::get('/staff', [Front\AdminController::class, 'staff']);

Route::get('/student', [Front\AdminController::class, 'student']);

Route::get('/class', [Front\AdminController::class, 'class']);

Route::get('/counselor', [Front\AdminController::class, 'counselor']);

Route::get('/addstudent', [Front\AdminController::class, 'addStudent']);

Route::post('/addstudent', [Front\AdminController::class, 'addStudent1']);

Route::get('/addcourse', [Front\AdminController::class, 'addCourse']);

Route::post('/addcourse', [Front\AdminController::class, 'addCourse1']);

Route::get('/addprofessor', [Front\AdminController::class, 'addProfessor']);

Route::post('/addprofessor', [Front\AdminController::class, 'addProfessor1']);

Route::get('/addcounselor', [Front\AdminController::class, 'addCounselor']);

Route::post('/addcounselor', [Front\AdminController::class, 'addCounselor1']);

// AN

Route::get('/instructor', [Front\HomeController::class, 'instructor']);

Route::post('/contact', [Front\HomeController::class, 'subscribe']);

// PHONG

Route::post('/courses', [Front\CourseController::class, 'new_course']);

Route::get('sssss', [Front\AdminController::class, 'sssss']);
