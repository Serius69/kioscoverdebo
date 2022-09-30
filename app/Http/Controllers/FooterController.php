<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    private $quantity = 1;
    public function privacy(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('privacy',$data);
   }
    public function terms(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('terms',$data);
    }
    // public function aboutus(){
    //     return view('about');
    // }
}
