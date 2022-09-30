<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Latest;
use App\Models\Project;
use App\Models\Typelatest;

class LatestController extends Controller
{
    private $quantity = 1;
    public function indexLatest(){
        $data = [
            'latests'   => Latest::orderBy('id','asc')->paginate(9),
            'validate' => $this->quantity
        ];
        return view ('latest.last',$data);
    }
    /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    // public function create(){
    //     return view('intermediaty');
    // }
    public function intermediaty(){
        $data = ['latests'=> Latest::orderBy('id','asc')->paginate(12),
                'validate' => $this->quantity
        ];
        return view('intermediaty',$data);
    }
            /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function agend(){
        
        $data = [
            'events' => Event::orderBy('id','asc')->paginate(9),
            'validate' => $this->quantity
        ] ;
        return view('agend',$data);
    }
        /**
* Display a lot of latest
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function investigation(){
        $typelatests = Typelatest::orderBy('id','asc')->paginate(100);
        $latests = Latest::orderBy('date_publication','desc')->paginate(5);       
        $validate = $this->quantity    ;
        return view('investigation',compact('latests','typelatests','validate'));
    }
        /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function show($id)
    {
        $latest = Latest::find($id);
        $projects = Project::orderBy('id','asc')->paginate(6);
        $typelatests = Typelatest::orderBy('id','asc')->paginate(100);
        $latests = Latest::orderBy('date_publication','desc')->paginate(5);
    return view('latest.single',compact('latest','latests','typelatests','projects'));
    }



}
