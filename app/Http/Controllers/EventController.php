<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    private $quantity = 1;
    /**
    * Display the specified resource.
    *
    * @param  \App\Event  $event
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $validate = $this->quantity;
        $event = Event::find($id);
        $events=Event::orderBy('id','desc')->paginate(7);
    return view('event.single',compact('event','events','validate'));
    }

}
