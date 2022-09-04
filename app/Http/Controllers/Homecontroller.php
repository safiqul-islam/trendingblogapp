<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{



    public function index()
    {
        return view('blog.blog');
    }

    public function home()
    {
        return view('blog.home');
    }

    public function addblog()
    {
        return view('blog.home');
    }

    public function about()
    {
        return view('about.about');
    }

    public function student()
    {
        $students = Student::students();
        return view('student.student',[
            'students' => $students,
        ]);
    }
    public $student;

    public function studentdetail($id)
    {

        $students = Student::students();

        foreach ($students as $student){

            if ($student['id'] == $id){
                $this->student = $student;
            }
        }
//        return $this->student;

        return view('student.details',[
            'students' => $this->student,
        ]);
    }

    public function fullname()
    {
        return view('blog.blog');
    }


}
