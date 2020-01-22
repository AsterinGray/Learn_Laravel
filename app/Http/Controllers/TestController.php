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

    public function index($name){
        return $name;
    }

    public function form(){
        return view('form');
    }

    public function process(Request $form1){
        $name = $form1->input('name');
        $address = $form1->input('address');
        return "Name : ".$name.", <br>Address : ".$address; 
    }
}