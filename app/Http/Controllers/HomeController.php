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
    private $quantity2 = 1;
    public function __invoke(){   
        $data = [
            'events'  => Event::orderBy('id','asc')->paginate(100),
             'latests'   => Latest::orderBy('date_publication','desc')->paginate(3),
             'projects' => Project::orderBy('id','asc')->paginate(100),
             'banners' => Banner::orderBy('id','asc')->paginate(100),
            'validate' => $this->quantity
        ];
        
        return view('index',$data);

   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $validate = $this->quantity2; 
        // $this->middleware('auth');
         $data = [
             'events'  => Event::orderBy('id','asc')->paginate(100),
             'latests'   => Latest::orderBy('id','asc')->paginate(100),
             'projects' => Project::orderBy('id','asc')->paginate(100),
             'banners' => Banner::orderBy('id','asc')->paginate(100),
             'validate' => $this->quantity
         ];
         return view('index',$data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function adminHome(){
    // $data['events'] = Event::orderBy('id','asc')->paginate(3);
    // $data2['latests'] = Latest::orderBy('id','asc')->paginate(3);
    // $data3['projects'] = Project::orderBy('id','asc')->paginate(3);

    //  Bug en el index para mandar banners
    $data = [
        'events'  => Event::orderBy('id','asc')->paginate(3),
        'latests'   => Latest::orderBy('id','asc')->paginate(5),
        'projects' => Project::orderBy('id','asc')->paginate(3)
    ];

    return view('adminHome',$data);
    }
    public function master(){
    // $data['events'] = Event::orderBy('id','asc')->paginate(3);
    // $data2['latests'] = Latest::orderBy('id','asc')->paginate(3);
    // $data3['projects'] = Project::orderBy('id','asc')->paginate(3);

    //  Bug en el index para mandar banners
    $data = [
        'events'  => Event::orderBy('id','asc')->paginate(3),
        'latests'   => Latest::orderBy('id','asc')->paginate(3),
        'projects' => Project::orderBy('id','asc')->paginate(3)
    ];

    return view('master-index',$data);
    }
    public function comming(){  
        $validate = $this->quantity;   
        return view('comingsoon',compact('validate'));
    }
}
