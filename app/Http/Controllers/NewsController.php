<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function intermediaty(){
        return view('intermediaty');
    }
    public function agend(){
        return view('agend');
    }
    public function investigation(){
        return view('investigation');
    }
    public function news(){
        return view('news');
    }
    public function newsn(){
        return view('new-single');
    }
}
