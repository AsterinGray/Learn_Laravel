<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index(){
        // return "Hello i'm learning how to return using controller in Laravel";
        // return view ('passing');
    // }

    // public function index(){
    //     $Name = "Raymond Tiandinatan";
    //     $Course = ["Alogrithm & Programming","Program Design Method","Linear Algebra"];

    //     return view('passing',['Name' => $Name, 'Courses' => $Course]);
    // }

    public function index($Name){
        return $Name;
    }
}