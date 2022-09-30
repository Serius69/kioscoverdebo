<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $quantity = 1;
    public function indexAbout(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('aboutus',$data);
    }
}
