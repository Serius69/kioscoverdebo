<?php

namespace App\Http\Controllers;
use App\Models\Latest;
use Illuminate\Http\Request;

class LatestController extends Controller
{

    public function indexLatest(){
        $data['latests'] = Latest::orderBy('id','asc')->paginate(12);
        return view ('latests.latest',$data);
    }
    /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function create(){
        return view('intermediaty');
    }
    public function intermediaty(){
        $data['latests'] = Latest::orderBy('id','asc')->paginate(12);
        return view('intermediaty');
    }
            /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function agend(){
        $data['events'] = Latest::orderBy('id','asc')->paginate(9);
        return view('agend',$data);
    }
        /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function investigation(){
        $data['latests'] = Latest::orderBy('id','asc')->paginate(6);
        return view('investigation',$data);
    }
        /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
    public function newsn(Latest $latest)
    {
    return view('new-single',compact('latest'));
    }



}
