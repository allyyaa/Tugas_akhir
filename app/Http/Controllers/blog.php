<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about', ['nama'=>'iuyuiyiu', 'nim'=>'220']);
    }
    public function contac(){
        return view('contac');
    }
}
