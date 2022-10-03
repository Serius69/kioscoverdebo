<?php

namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\operator;
use App\Models\Photo;
use App\Models\Typeoperator;
use Illuminate\Http\Request;

class OperatorCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['operators'] = operator::orderBy('id','asc')->paginate(7);
return view('operator.crud', $data);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('operator.create');
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
'name' => 'required',
'description' => 'required',
'url' => 'required',
// 'path_video' => 'required',
'path' => 'required'
]);
        if($request->file('path')!=null)
         {
             $file = $request->file('path');
             $file->move('img/operadores', $file->getClientOriginalName());
             $imagen=$file->getClientOriginalName();
         }
         else
         {
             $imagen="sin_imagen.jpg";
         }
         
                $operator = new operator;
                $operator->name = $request->name;
                $operator->description = $request->description;
                $operator->url = $request->url;
                $operator->path_video = $request->path_video;
                $photo = new Photo;
                $photo->path = $imagen;                
                $photo->save();  
                $operator->photo_id = $photo->id;          
                $operator->save();
                $operators = operator::orderBy('id','asc')->paginate(10);
                return view('operator.crud',compact('operators'))->with('success','operator Has Been updated successfully');
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
public function edit(operator $operator)
{
return view('operator.edit',compact('operator'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'url' => 'required',
        // 'path_video' => 'required',
        'path' => 'required'
        ]);
        if($request->file('path')!=null)
                 {
                     $file = $request->file('path');
                     $file->move('img/operadores', $file->getClientOriginalName());
                     $imagen=$file->getClientOriginalName();
                 }
                 else
                 {
                     $imagen="sin_imagen.jpg";
                 }
                 
                $operator = operator::find($id);
                $operator->name = $request->name;
                $operator->description = $request->description;
                $operator->url = $request->url;
                $operator->path_video = $request->path_video;
                $photo = new Photo;
                $photo->path = $imagen;                
                $photo->save();  
                $operator->photo_id = $photo->id;          
                $operator->save();
                $operators = operator::orderBy('id','asc')->paginate(10);
        return view('operator.crud',compact('operators'))->with('success','operator Has Been updated successfully');

}
/**
* Remove the specified resource from storage.
*
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id){
        $operator = operator::find($id);
        $operator->status = 0;
        $operator->save();
        // $data['operators'] = DB::table('operators')->where('status','1')->orderBy('id','ASC')->paginate(6);
        return view('operator.index',compact('operator'))->with('success','operator Has Been updated successfully');

}

    /**
* Display the specified resource.
*
* @param  \App\operator  $operator
* @return \Illuminate\Http\Response
*/
 public function show(operator $operator)
 {
    $operator->status=0;
    $operator->save();
    $data['operators'] = operator::orderBy('id','asc')->paginate(10);
    return view('operator.crud',$data)->with('success','operator Has Been updated successfully');

 }
}
