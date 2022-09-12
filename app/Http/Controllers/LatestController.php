<?php

namespace App\Http\Controllers;
use App\Models\Latest;
use Illuminate\Http\Request;

class LatestController extends Controller
{
    public function indexLatest(){
        $data['latests'] = Latest::orderBy('id','asc')->paginate(12);
        return view ('news',$data);
    }

    public function create(){
        return view('intermediaty');
    }
    public function intermediaty(){
        return view('intermediaty');
    }
    public function agend(){
        $data['events'] = Latest::orderBy('id','asc')->paginate(9);
        return view('agend',$data);
    }
    public function investigation(){
        $data['latests'] = Latest::orderBy('id','asc')->paginate(6);
        return view('investigation',$data);
    }
    public function newsn(){
        return view('new-single');
    }
}
