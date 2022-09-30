<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    private $quantity = 1;
    /**
    * Display the specified resource.
    *
    * @param  \App\Project  $project
    * @return \Illuminate\Http\Response
    */
    public function lastProjects(){
        $data = [
            'validate' => $this->quantity,
            'projects' => Project::orderBy('id','desc')->paginate(4)
        ];
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
        $validate = $this->quantity;
    return view('projects.show',compact('project','validate'));
    }

    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
$data = [
    'projects'=> Project::orderBy('id','asc')->paginate(7),
    'validate' => $this->quantity
];
return view('projects.listproject', $data);
}


}
