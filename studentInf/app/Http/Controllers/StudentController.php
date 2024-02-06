<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create(){
        return view('student.create');
    }
    public function home(){
        return view('student.home');
    }
    public function view(){
        return view('student.view',['students'=>Student::get()]);
    }
    public function store(Request $request){
           $student = new Student;
           $student->StudentID = $request->stid;
           $student->StudentName = $request->stname;
           $student->Department = $request->stdept;
           $student->save();
           return view('student.create');
    }
    public function destroy(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();

        return redirect()->route('student.view');
    }
}
