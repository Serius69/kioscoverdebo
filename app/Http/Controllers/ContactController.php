<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $quantity = 1;
    public function question(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('question',$data);
    }
    public function index(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('contactus',$data);
    }
    public function standars(){
        $data = [
            'validate' => $this->quantity
        ];
        return view('standars',$data);
    }

}
