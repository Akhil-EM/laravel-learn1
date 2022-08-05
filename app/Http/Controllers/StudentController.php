<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    
    public function index(){
        // $students = Student::all();
        $students = Student::orderBy("name","desc")->get();
        $data = ["students" => $students];
        
        return view("students",$data);
    }

    public function create(){
        error_log(request("name"));
        
        redirect("/my-students/25");
    }

    public function student($id){

        // $student = Student::where("id",$id)->get();
        $student = Student::find($id);
        // var_dump( $student);
        //since returning an object can access the values like $student->name;
        return $student;
    }
}
