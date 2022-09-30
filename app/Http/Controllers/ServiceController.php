<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $quantity = 1;
    public function recicle(){
        $validate = $this->quantity;
        return view('recicle',compact('validate'));
    }
    public function ofert(){
        $validate = $this->quantity;
        return view('ofert',compact('validate'));
    }
    public function advice(){
        $validate = $this->quantity;
        return view('advice',compact('validate'));
    }
    public function operator(){
        $validate = $this->quantity;
        $operators = Operator::orderBy('id','asc')->paginate(9);
        return view('operator.list',compact('validate','operators'));
    }
}
