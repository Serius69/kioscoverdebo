<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
    * Display the specified resource.
    *
    * @param  \App\Project  $project
    * @return \Illuminate\Http\Response
    */
    public function lastProjects(){
        $data['projects'] = Project::orderBy('id','desc')->paginate(4);
        return view('projects.index', $data);
    }
    /**
    * Display the specified resource.
    *
    * @param  \App\Project  $project
    * @return \Illuminate\Http\Response
    */
    public function show(Project $project)
    {
    return view('projects.show',compact('project'));
    }

    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
$data['projects'] = Project::orderBy('id','asc')->paginate(7);
return view('projects.listproject', $data);
}


}
