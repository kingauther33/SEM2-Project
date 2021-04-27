<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Counselor;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // DUC
    // Pages
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
        $professors = Teacher::all();

        return view('front.admin.staff', compact('professors'));
    }

    public function student()
    {
        $students = Student::all();

        return view('front.admin.student', compact('students'));
    }

    public function class()
    {
        $grades = Grade::all();

        return view('front.admin.class', compact('grades'));
    }

    public function counselor()
    {
        $counselors = Counselor::all();

        return view('front.admin.counselor', compact('counselors'));
    }

    // Student

    public function addStudent()
    {
        return view('front.admin.add.addstudent');
    }

    public function addStudent1(Request $request) {

        $request->validate([
           'first name'=>'required',
           'last name'=>'required',
           'email'=>'required|email',
           'registration date'=>'date_format:Y-m-d|nullable',
           'class id'=>'required|numeric',
           'password'=>'required|min:6|max:14',
           'phone number'=>'required|regex:/(0)[0-9]{9}/',
           'birth date'=>'date_format:Y-m-d|before:today|nullable',
           'status'=>'required|numeric',
           'address'=>'required|max:255'
        ]);

        $addstudent = new Student();
        $addstudent->grade_id = $request->input('class id');
        $addstudent->avatar = $request->avatar;
        $addstudent->email = $request->email;
        $addstudent->password = $request->password;
        $addstudent->fname = $request->input('first name');
        $addstudent->lname = $request->input('last name');
        $addstudent->dob = $request->input('birth date');
        $addstudent->phone = $request->input('phone number');
        $addstudent->address = $request->address;
        $addstudent->date_of_join = $request->input('registration date');
        $addstudent->status = $request->status;

        $addstudent->save();

        return redirect('student')
            ->with('success', '<div class="alert alert-success">Student Added Successfully!</div>');
    }

    public function updateStudent(Request $request, $id) {

        $request->validate([
            'fname'=>'required',
            'Last Name'=>'required',
            'email'=>'required|email',
            'date_of_join'=>'date_format:Y-m-d|nullable',
            'grade_id'=>'required|numeric',
            'password'=>'required|min:6|max:14',
            'phone'=>'required|regex:/(0)[0-9]{9}/',
            'dob'=>'date_format:Y-m-d|before:today|nullable',
            'status'=>'required|numeric',
            'address'=>'required|max:255'
        ]);

        $addstudent = Student::find($id);
        $addstudent->grade_id = $request->grade_id;
        $addstudent->avatar = $request->avatar;
        $addstudent->email = $request->email;
        $addstudent->password = $request->password;
        $addstudent->fname = $request->fname;
        $addstudent->lname = $request->input('Last Name');
        $addstudent->dob = $request->dob;
        $addstudent->phone = $request->phone;
        $addstudent->address = $request->address;
        $addstudent->date_of_join = $request->date_of_join;
        $addstudent->status = $request->status;

        $addstudent->save();

        return redirect('student')
            ->with('success', '<div class="alert alert-success">Student Added Successfully!</div>');
    }

    // Course

    public function addCourse()
    {
        return view('front.admin.add.addcourse');
    }

    public function addCourse1(Request $request) {

        $request->validate([
            'course name'=>'required',
            'course id'=>'required|numeric',
            'course details'=>'required|max:255',
            'starting year'=>'required|regex:/{4}/',
            'professor id'=>'required|numeric'
        ]);

        $addcourse = new Grade();
        $addcourse->year = $request->input('starting year');
        $addcourse->name = $request->input('course name');
        $addcourse->description = $request->input('course details');
        $addcourse->teacher_id = $request->input('professor id');
        $addcourse->course_id = $request->input('course id');

        $addcourse->save();

        return redirect('class')
            ->with('success', '<div class="alert alert-success">Course Added Successfully!</div>');;
    }

    // Teacher

    public function addProfessor()
    {
        return view('front.admin.add.addprofessor');
    }

    public function addProfessor1(Request $request) {

        $request->validate([
            'first name'=>'required',
            'last name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'department'=>'required',
            'phone number'=>'required|regex:/(0)[0-9]{9}/',
            'birth date'=>'date_format:Y-m-d|before:today|nullable',
            'address'=>'required|max:255',
            'comment'=>'max:255'
        ]);

        $addprofessor = new Teacher();
        $addprofessor->avatar = $request->avatar;
        $addprofessor->email = $request->email;
        $addprofessor->password = $request->password;
        $addprofessor->fname = $request->input('first name');
        $addprofessor->lname = $request->input('last name');
        $addprofessor->dob = $request->input('birth date');
        $addprofessor->address = $request->address;
        $addprofessor->phone = $request->input('phone number');
        $addprofessor->specialty = $request->input('department');
        $addprofessor->comment = $request->comment;

        $addprofessor->save();

        return redirect('staff')
            ->with('success', '<div class="alert alert-success">Teacher Added Successfully!</div>');
    }

    // Counselor

    public function addCounselor() {
        return view('front.admin.add.addcounselor');
    }

    public function addCounselor1(Request $request) {

        $request->validate([
            'first name'=>'required',
            'last name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|max:14',
            'birth date'=>'date_format:Y-m-d|before:today|nullable',
            'phone number'=>'required|regex:/(0)[0-9]{9}/'
        ]);

        $counselors = new Counselor();
        $counselors->fname = $request->input('first name');
        $counselors->lname = $request->input('last name');
        $counselors->email = $request->email;
        $counselors->password = $request->password;
        $counselors->dob = $request->input('birth date');
        $counselors->phone = $request->input('phone number');

        $counselors->save();

        return redirect('counselor')
            ->with('success', '<div class="alert alert-success">Counselor Added Successfully!</div>');;
    }

}
