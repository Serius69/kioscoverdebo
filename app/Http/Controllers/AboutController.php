<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function indexAbout(){
        return view('aboutus');
    }
}
