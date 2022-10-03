<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    private $quantity = 1;
    public function login(){
        $validate = $this->quantity    ;
        return view('login',compact('validate'));
    }
    public function signup(){
        $validate = $this->quantity    ;
        return view('signup',compact('validate'));
    }
}
