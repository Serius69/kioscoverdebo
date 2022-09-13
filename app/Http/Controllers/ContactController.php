<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function question(){
        return view('question');
    }
    public function index(){
        return view('contactus');
    }
    public function standars(){
        return view('standars');
    }

}
