<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        $student=array();
        for($i=0;$i<10;$i++)
        {
            $student=array("id"=>$i+1,"Name"=>"Serial  ".($i+1),"Department"=>" CS ");
            $student=(object)$student;
            $students[]= $student;
        }
        return view('Students.list')->with('student',$students);
    }
}
