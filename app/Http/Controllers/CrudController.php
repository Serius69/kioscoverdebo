<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function eventCrud(){
        return view('crudEvent');
    }
    public function projectCrud(){
        return view('crud_latest');
    }
    public function latestCrud(){
        return view('crud_project');
    }

}
