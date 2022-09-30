<?php
namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Photo;
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
return view('project.crud', $data);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('project.create');
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
'path' => 'required'
]);
if($request->file('path')!=null)
                 {
                     $file = $request->file('path');
                     $file->move('img/projects', $file->getClientOriginalName());
                     $imagen=$file->getClientOriginalName();
                 }
                 else
                 {
                     $imagen="sin_imagen.jpg";
                 }
$project = new Project;
$project->name = $request->name;
$project->information = $request->information;
$project->description = $request->description;
        $photo = new Photo;
        $photo->path = $imagen;
        $photo->save();  
$project->photo_id = $photo->id;  
$project->save();
// return redirect()->back()->with('message', 'IT WORKS!');
// return redirect()->route('projects.index')
//  ->with('success','project Has Been updated successfully');
$projects = project::orderBy('id','asc')->paginate(10);

return view('project.crud',compact('projects'))->with('success','project Has Been updated successfully');

}
/**
* Display the specified resource.
*
* @param  \App\project  $project
* @return \Illuminate\Http\Response
*/
public function show(Project $project)
{
    $project->status=0;
    $project->save();
    $data['projects'] = project::orderBy('id','asc')->paginate(10);
    return view('project.crud',$data)->with('success','project Has Been updated successfully');


}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Project  $project
* @return \Illuminate\Http\Response
*/
public function edit(Project $project)
{
return view('project.edit',compact('project'));
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
    'path' => 'required'
]);
                if($request->file('path')!=null)
                 {
                     $file = $request->file('path');
                     $file->move('img/projects', $file->getClientOriginalName());
                     $imagen=$file->getClientOriginalName();
                 }
                 else
                 {
                     $imagen="sin_imagen.jpg";
                 }
$project = Project::find($id);
$project->name = $request->name;
$project->information = $request->information;
$project->description = $request->description;
        $photo = new Photo;
        $photo->path = $imagen;
        $photo->save();  
$project->photo_id = $photo->id;  
$project->save();
// return redirect()->back()->with('message', 'IT WORKS!');
// return redirect()->route('projects.index')
//  ->with('success','project Has Been updated successfully');
$projects = project::orderBy('id','asc')->paginate(10);

return view('project.crud',compact('projects'))->with('success','project Has Been updated successfully');

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


}
