<?php

namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventCRUDController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['events'] = Event::orderBy('id','asc')->paginate(7);
 return view('events.crudEvent', $data);
//return view("crud.crud_event", [ "events" => $events ]);
}
/**
* Display an element.
*
* @return \Illuminate\Http\Response
*/
public function view($id){
    $pro = Event::find($id);
    $events=DB::table('events')->get();
    return view('crud_event',compact('pro','events'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('events.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'media' => 'required',
'description' => 'required',
'event_photo' => 'required'
]);
$event = new Event;
$event->name = $request->name;
$event->media = $request->media;
$event->description = $request->description;
$event->event_photo = $request->event_photo;
$event->save();
return redirect()->route('events.index')
->with('success','event has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function show(Event $event)
{
return view('event-single',compact('event'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function edit(Event $event)
{
return view('events.edit',compact('event'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
     'name' => 'required',
     'media' => 'required',
     'description' => 'required',
     'event_photo' => 'required'
]);
$event = Event::find($id);
$event->name = $request->name;
$event->media = $request->media;
$event->description = $request->description;
$event->event_photo = $request->event_photo;
$event->save();
// Error
//return redirect()->route('events.crudEvent')
//->with('success','event Has Been updated successfully');
return view('events.edit',compact('event'))->with('success','latest Has Been updated successfully');

}
/**
* Remove the specified resource from storage logic.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function modify($id)
{
    $event = Event::find($id);
    $event->status = 0;
    $event->save();
    //$event->delete();
    return view('events.index',compact('event'))->with('success','latest Has Been updated successfully');
}

/**
* Remove the specified resource from storage.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function destroy(Event $event)
{
$event->delete();
return redirect()->route('events.index')
->with('success','event has been deleted successfully');
}

}
