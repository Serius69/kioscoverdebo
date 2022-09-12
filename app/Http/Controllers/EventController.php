<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        $data['events'] = Event::orderBy('id','desc')->paginate(5);
        // return view('crud_event', $data);
        return view("crud_event", [ "events" => $events ]);
    }

    public function lastEvents(){
        $data['events'] = Event::orderBy('id','desc')->paginate(5);
        // return view('crud_event', $data);
        return view("crud_event", [ "events" => $events ]);
    }

    public function createevent(){
        return view('createevent');
    }
}
