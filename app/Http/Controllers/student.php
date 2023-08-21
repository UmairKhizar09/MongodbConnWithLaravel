<?php

namespace App\Http\Controllers;
use App\Models\TblStudent;

use Illuminate\Http\Request;

class student extends Controller
{
    //
    public function index()
    {
        $students = TblStudent::all();
        return view('showData',compact('students'));
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";
    }
}
