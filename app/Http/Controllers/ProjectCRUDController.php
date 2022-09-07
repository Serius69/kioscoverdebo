<?php
namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['projects'] = project::orderBy('id','desc')->paginate(5);
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
'projectPhoto' => 'required'
]);
$project = new project;
$project->name = $request->name;
$project->description = $request->description;
$project->projectPhoto = $request->projectPhoto;
$project->save();
return redirect()->route('companies.index')
->with('success','project has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function show(project $project)
{
return view('companies.show',compact('project'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function edit(project $project)
{
return view('companies.edit',compact('project'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required',
]);
$project = project::find($id);
$project->name = $request->name;
$project->email = $request->email;
$project->address = $request->address;
$project->save();
return redirect()->route('companies.index')
->with('success','project Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function destroy(project $project)
{
$project->delete();
return redirect()->route('companies.index')
->with('success','project has been deleted successfully');
}
}
