<?php
namespace App\Http\Controllers\Crud;
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
$data['events'] = Event::orderBy('id','desc')->paginate(5);
return view('crudEvent', $data);
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
'eventPhoto' => 'required'
]);
$event = new Event;
$event->name = $request->name;
$event->description = $request->description;
$event->eventPhoto = $request->eventPhoto;
$event->save();
return redirect()->route('events.index')
->with('success','event has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\event  $event
* @return \Illuminate\Http\Response
*/
public function show(Event $event)
{
return view('events.show',compact('event'));
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
* @param  \App\event  $event
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'information' => 'required',
'description' => 'required',
'eventPhoto' => 'required'
]);
$event = Event::find($id);
$event->name = $request->name;
$event->information = $request->information;
$event->description = $request->description;
$event->eventPhoto = $request->eventPhoto;
$event->save();
return redirect()->route('events.index')
->with('success','event Has Been updated successfully');
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
