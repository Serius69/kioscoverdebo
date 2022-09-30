<?php

namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerCRUDController extends Controller
{
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function list()
{
// $data['banners'] = DB::table('banners')->where('status','1')->orderBy('date_publication','ASC')->paginate(6);
$data['banners'] = Banner::orderBy('id','desc')->paginate(7);
return view('banner.banners', $data);
}
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['banners'] = Banner::orderBy('id','desc')->paginate(10);
return view('banner.crud', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('banner.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
        $request->validate([
        'path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($request->file('path')!=null)
         {
             $file = $request->file('path');
             $file->move('img/banners', $file->getClientOriginalName());
             $imagen1=$file->getClientOriginalName();
         }
         else
         {
             $imagen1="sin_imagen.jpg";
         }         
         $banner = new Banner;
        $banner->path=$imagen1;
        $banner->save();
$data['banners'] = Banner::orderBy('id','asc')->paginate(10);
return view('banner.crud', $data);
// return redirect()->route('banners.index',$data)
// ->with('success','banner has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\banner  $banner
* @return \Illuminate\Http\Response
*/
public function show(banner $banner)
{
        $banner->status=0;
        $banner->save();
        $data['banners'] = banner::orderBy('id','desc')->paginate(10);
        return view('banner.crud',$data)->with('success','banner Has Been updated successfully');
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\banner  $banner
* @return \Illuminate\Http\Response
*/
public function edit(banner $banner)
{
return view('banner.update',compact('banner'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\banner  $banner
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if($request->file('path')!=null)
         {
             $file = $request->file('path');
             $file->move('img/banners', $file->getClientOriginalName());
             $imagen1=$file->getClientOriginalName();
         }
         else
         {
             $imagen1="sin_imagen.jpg";
         }
        $banner = Banner::find($id);
        $banner->path=$imagen1;
        $banner->save();
$data['banners'] = banner::orderBy('id','desc')->paginate(10);
return view('banner.crud',$data)->with('success','banner Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\banner  $banner
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id)
{
    // $request->validate([
    //     'title' => 'required',
    //     'subtitle' => 'required',
    //     ]);
    $banner = Banner::find($id);
        $banner->status=0;
        $banner->save();
        $data['banners'] = banner::orderBy('id','desc')->paginate(10);
        return view('banner.crud',$data)->with('success','banner Has Been updated successfully');
}
}
