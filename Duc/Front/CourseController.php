<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function course() {
        return view('front.course.courses');
    }

    public function about() {
        return view('front.about.about');
    }

    public function contact() {
        return view('front.contact.contact');
    }
}
