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
public function index()
{
$data['projects'] = Project::orderBy('id','asc')->paginate(7);
return view('projects.crudProject', $data);
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
'project_photo' => 'required'
]);
$project = new Project;
$project->name = $request->name;
$project->information = $request->information;
$project->description = $request->description;
$project->project_photo = $request->project_photo;
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
public function show(Project $project)
{
return view('projects.show',compact('project'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Project  $project
* @return \Illuminate\Http\Response
*/
public function edit(Project $project)
{
return view('projects.edit',compact('project'));
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
    'project_photo' => 'required'
]);
$project = Project::find($id);
$project->name = $request->name;
$project->information = $request->information;
$project->description = $request->description;
$project->project_photo = $request->project_photo;
$project->save();
// return redirect()->back()->with('message', 'IT WORKS!');
// return redirect()->route('projects.index')
//  ->with('success','project Has Been updated successfully');
return view('projects.edit',compact('project'))->with('success','project Has Been updated successfully');

}
/**
* Remove the specified resource from storage.
*
* @param  \App\Project  $project
* @return \Illuminate\Http\Response
*/
public function destroy(Project $project)
{
$project->delete();
return redirect()->route('projects.index')
->with('success','project has been deleted successfully');
}
/**
* Remove the specified resource from storage logic.
*
* @param  \App\Event  $event
* @return \Illuminate\Http\Response
*/
public function modify(Project $project)
{
    $project->status = 0;
return redirect()->route('events.index')
->with('success','Eliminado logico exitoso');
}



}
