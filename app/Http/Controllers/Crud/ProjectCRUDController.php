<?php
namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function indexcrud()
{
$data['projects'] = Project::orderBy('id','asc')->paginate(10);
return view('crudProject', $data);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('projects.create');
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
'information' => 'required',
'description' => 'required',
'projectPhoto' => 'required'
]);
$project = new Project;
$project->name = $request->name;
$project->information = $request->description;
$project->description = $request->description;
$project->projectPhoto = $request->projectPhoto;
$project->save();
return redirect()->route('projects.index')
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
return view('projects.show',compact('project'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function edit(project $project)
{
return view('projects.edit_project',compact('project'));
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
    'information' => 'required',
    'description' => 'required',
    'projectPhoto' => 'required'
]);
$project = Project::find($id);
$project->name = $request->name;
$project->information = $request->description;
$project->description = $request->description;
$project->projectPhoto = $request->projectPhoto;
$project->save();
return redirect()->route('projects.index')
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
return redirect()->route('projects.index')
->with('success','project has been deleted successfully');
}
}
