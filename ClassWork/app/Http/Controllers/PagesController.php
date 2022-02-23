<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('Home.login');
    }
    public function pageone()
    {
        $keyword="Desktop Ram";
        $animals=["Tiger","Elephant","Mice","Ant","Zebra"];
        return view('Home.pageone')->with('k',$keyword)->with('ani',$animals);
    }
}
