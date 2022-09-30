<?php

namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Photo;
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
 return view('event.crud', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('event.create');
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
'path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
]);
        if($request->file('path')!=null)
         {
             $file = $request->file('path');
             $file->move('img/events', $file->getClientOriginalName());
             $imagen=$file->getClientOriginalName();
         }
         else
         {
             $imagen="sin_imagen.jpg";
         }
        
        $event = new Event;
        $event->name = $request->name;
                $event->media = $request->media;
                $event->description = $request->description;
        
                $photo = new Photo;
                $photo->path = $imagen;
                
                $photo->save();  
                $event->photo_id = $photo->id;          
                $event->save();
                $events = Event::orderBy('id','asc')->paginate(10);
return view('event.crud',compact('events'));
}
/**
* Destroy the specified resource.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function show(Event $event)
{
        $event->status=0;
         $event->save();
         $data['events'] = Event::orderBy('id','asc')->paginate(10);
         return view('event.crud',$data)->with('success','event Has Been updated successfully');
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function edit(Event $event)
{
return view('event.edit',compact('event'));
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
        'path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
                if($request->file('path')!=null)
                 {
                     $file = $request->file('path');
                     $file->move('img/events', $file->getClientOriginalName());
                     $imagen=$file->getClientOriginalName();
                 }
                 else
                 {
                     $imagen="sin_imagen.jpg";
                 }
                
                 $event = Event::find($id);
                $event->name = $request->name;
                $event->media = $request->media;
                $event->description = $request->description;
        
                $photo = new Photo;
                $photo->path = $imagen;
                
                $photo->save();  
                $event->photo_id = $photo->id;          
                $event->save();
                $events = Event::orderBy('id','asc')->paginate(10);
return view('event.crud',compact('events'))->with('success','event Has Been updated successfully');

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
    return view('events.index',compact('event'))->with('success','event Has Been updated successfully');
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
