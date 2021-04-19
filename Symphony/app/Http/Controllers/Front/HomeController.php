<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }

    public function login()
    {
        return view('front.login.login');
    }

    public function admin()
    {
        return view('front.admin.admin');
    }

    public function staff()
    {
        return view('front.admin.staff');
    }

    public function student()
    {
        return view('front.admin.student');
    }

    public function class()
    {
        return view('front.admin.class');
    }

    public function addStudent()
    {
        return view('front.admin.add.addstudent');
    }

    public function addCourse()
    {
        return view('front.admin.add.addcourse');
    }

    public function addProfessor()
    {
        return view('front.admin.add.addprofessor');
    }
}
