<?php
namespace App\Http\Controllers;
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
return view('companies.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('companies.create');
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
'description' => 'required',
'latestPhoto' => 'required'
]);
$latest = new Latest;
$latest->name = $request->name;
$latest->description = $request->description;
$latest->latestPhoto = $request->latestPhoto;
$latest->save();
return redirect()->route('companies.index')
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
return view('companies.show',compact('latest'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function edit(Latest $latest)
{
return view('companies.edit',compact('latest'));
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
'email' => 'required',
'address' => 'required',
]);
$latest = latest::find($id);
$latest->name = $request->name;
$latest->email = $request->email;
$latest->address = $request->address;
$latest->save();
return redirect()->route('companies.index')
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
return redirect()->route('companies.index')
->with('success','latest has been deleted successfully');
}
}
