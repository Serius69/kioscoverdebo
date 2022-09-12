<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function lastProjects(){
        $data['projects'] = Project::orderBy('id','desc')->paginate(3);
        return view('projects.index', $data);
    }

}
