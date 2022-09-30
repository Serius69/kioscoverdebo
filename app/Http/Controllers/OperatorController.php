<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    private $quantity = 1;
    /**
* Display a lot of operator
*
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
public function investigation(){
    $operators = operator::orderBy('date_publication','desc')->paginate(5);       
    $validate = $this->quantity;
    return view('investigation',compact('operators','typeoperators','validate'));
}
    /**
* Display the specified resource.
*
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
public function show($id)
{
    $operator = Operator::find($id);
    $operators = operator::orderBy('date_publication','desc')->paginate(5);
    $validate = $this->quantity;
return view('operator.single',compact('operator','operators','validate'));
}
}
