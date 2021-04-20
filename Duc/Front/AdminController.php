<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin() {
        return view('front.admin.admin');
    }

    public function class() {
        return view('front.admin.class');
    }

    public function staff() {
        return view('front.admin.staff');
    }

    public function student() {
        return view('front.admin.student');
    }

    public function addStudent() {
        return view('front.admin.add.addstudent');
    }

    public function addProfessor() {
        return view('front.admin.add.addprofessor');
    }

    public function addCourse() {
        return view('front.admin.add.addcourse');
    }
}
