<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function recicle(){
            return view('recicle');
    }
    public function ofert(){
        return view('ofert');
    }
    public function advice(){
        return view('advice');
    }
}
