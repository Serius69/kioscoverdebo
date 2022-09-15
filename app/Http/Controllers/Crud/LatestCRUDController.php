<?php
namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Latest;
use Illuminate\Http\Request;
class LatestCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['latests'] = latest::orderBy('id','asc')->paginate(7);
return view('latests.crudLatest', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('latests.create');
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
'author' => 'required',
'description' => 'required',
'latest_photo' => 'required'
]);
$latest = new Latest;
$latest->name = $request->name;
$latest->author = $request->author;
$latest->description = $request->description;
$latest->latest_photo = $request->latest_photo;
$latest->save();
return redirect()->route('latests.index')
->with('success','latest has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function show(Latest $latest)
{
return view('new-single',compact('latest'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function edit(Latest $latest)
{
return view('latests.edit',compact('latest'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\latest  $latest
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'author' => 'required',
'description' => 'required',
'latest_photo' => 'required',
]);
$latest = Latest::find($id);
$latest->name = $request->name;
$latest->author = $request->author;
$latest->description = $request->description;
$latest->latest_photo = $request->latest_photo;
$latest->save();
// return redirect()->route('latests.edit',compact('latest'))
// ->with('success','latest Has Been updated successfully');
return view('latest.edit',compact('latest'))->with('success','latest Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function destroy(Latest $latest)
{
$latest->delete();
return redirect()->route('latests.index')
// ->with('success','latest has been deleted successfully');
->with('success','Noticia fue eliminada correctamente');

}
/**
* Remove the specified resource from storage logic.
*
* @param  \App\Latest  $event
* @return \Illuminate\Http\Response
*/
public function modify(Latest $latest)
{
    $event->status = 0;
return redirect()->route('events.index')
->with('success','Eliminado logico exitoso');
}
}
