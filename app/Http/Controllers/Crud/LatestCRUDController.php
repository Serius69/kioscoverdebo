<?php
namespace App\Http\Controllers\Crud;
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
$data['latests'] = latest::orderBy('id','desc')->paginate(5);
return view('latests.index', $data);
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
'latestPhoto' => 'required'
]);
$latest = new Latest;
$latest->name = $request->name;
$latest->author = $request->author;
$latest->description = $request->description;
$latest->latestPhoto = $request->latestPhoto;
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
public function show(latest $latest)
{
return view('latests.show',compact('latest'));
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
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'author' => 'required',
'description' => 'required',
// 'latest_photo' => 'required',
]);
$latest = latest::find($id);
$latest->name = $request->name;
$latest->author = $request->author;
$latest->description = $request->description;
$latest->latest_photo = $request->latest_photo;
$latest->save();
return redirect()->route('latests.index')
->with('success','latest Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\latest  $latest
* @return \Illuminate\Http\Response
*/
public function destroy(latest $latest)
{
$latest->delete();
return redirect()->route('latests.index')
// ->with('success','latest has been deleted successfully');
->with('success','Noticia fue eliminada correctamente');

}
}
