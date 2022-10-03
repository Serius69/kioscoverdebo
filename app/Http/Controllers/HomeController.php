<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Latest;
use App\Models\Project;
use App\Models\Banner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $quantity = 0;
    public function __invoke(){
        // $data['events'] = Event::orderBy('id','asc')->paginate(3);
        // $data2['latests'] = Latest::orderBy('id','asc')->paginate(3);
        // $data3['projects'] = Project::orderBy('id','asc')->paginate(3);
    
        $data = [
            'events'  => Event::orderBy('id','asc')->paginate(3),
            'latests'   => Latest::orderBy('id','asc')->paginate(3),
            'projects' => Project::orderBy('id','asc')->paginate(3),
            'banners' => Banner::orderBy('id','asc')->paginate(10),
            'validate' => $this->quantity
        ];
        return view('index',$data);
   }
   public function admin(){
    // $data['events'] = Event::orderBy('id','asc')->paginate(3);
    // $data2['latests'] = Latest::orderBy('id','asc')->paginate(3);
    // $data3['projects'] = Project::orderBy('id','asc')->paginate(3);

    //  Bug en el index para mandar banners
    $data = [
        'events'  => Event::orderBy('id','asc')->paginate(3),
        'latests'   => Latest::orderBy('id','asc')->paginate(3),
        'projects' => Project::orderBy('id','asc')->paginate(3)
    ];

    return view('admin-index',$data);
    }
    public function comming(){  
        $validate = $this->quantity;   
        return view('comingsoon',compact('validate'));
    }
}
