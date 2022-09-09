<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function eventCrud(){
        return view('crudEvent');
    }
    public function projectCrud(){
        return view('crudProject');
    }
    public function latestCrud(){
        return view('crudLatest');
    }

}
