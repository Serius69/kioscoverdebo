<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Latest;
use App\Models\Project;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        // $data['events'] = Event::orderBy('id','asc')->paginate(3);
        // $data2['latests'] = Latest::orderBy('id','asc')->paginate(3);
        // $data3['projects'] = Project::orderBy('id','asc')->paginate(3);

        $data = [
            'events'  => Event::orderBy('id','asc')->paginate(3),
            'latests'   => Latest::orderBy('id','asc')->paginate(3),
            'projects' => Project::orderBy('id','asc')->paginate(3)
        ];


        return view('index',$data);
   }
}
