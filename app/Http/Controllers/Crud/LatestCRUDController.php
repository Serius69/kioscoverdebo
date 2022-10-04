<?php
namespace App\Http\Controllers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Latest;
use App\Models\Photo;
use App\Models\Typelatest;
use Illuminate\Http\Request;
class LatestCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['latests'] = latest::orderBy('id','asc')->paginate(7);
return view('latest.crud', $data);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
    $data['types'] = Typelatest::orderBy('id','asc')->paginate(100);
return view('latest.create',$data);
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
'author' => 'required',
'type_id' => 'required',
'description' => 'required',
'date_publication' => 'required',
'path' => 'required'
]);
        if($request->file('path')!=null)
         {
             $file = $request->file('path');
             $file->move('img/latests', $file->getClientOriginalName());
             $imagen=$file->getClientOriginalName();
         }
         else
         {
             $imagen="sin_imagen.jpg";
         }
                $latest = new Latest;
                $latest->name = $request->name;
                $latest->author = $request->author;
                $latest->type_id = $request->type_id;
                $latest->description = $request->description;
                $latest->date_publication = $request->date_publication;
                $latest->url = $request->url;
                $photo = new Photo;
                $photo->path = $imagen;
                
                $photo->save();  
                $latest->photo_id = $photo->id;          
                $latest->save();
                $latests = Latest::orderBy('id','asc')->paginate(10);
                return view('latest.crud',compact('latests'))->with('success','latest Has Been updated successfully');
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function edit(Latest $latest)
{
    $types= Typelatest::orderBy('id','asc')->paginate(10);
return view('latest.edit',compact('latest','types'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\latest  $latest
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'author' => 'required',
        'description' => 'required',
        'type_id' => 'required',
        'date_publication' => 'required',
        'path' => 'required'
        ]);
        if($request->file('path')!=null)
                 {
                     $file = $request->file('path');
                     $file->move('img/latest', $file->getClientOriginalName());
                     $imagen=$file->getClientOriginalName();
                 }
                 else
                 {
                     $imagen="sin_imagen.jpg";
                 }
        $latest = Latest::find($id);
        $latest->name = $request->name;
        $latest->author = $request->author;
        $latest->description = $request->description;
        $latest->date_publication = $request->date_publication;
        $latest->type_id = $request->type_id;
        $latest->url = $request->url;
        $photo = new Photo;
        $photo->path = $imagen;
        $photo->save();  
        $latest->photo_id = $photo->id;          
        $latest->save();
        // return redirect()->route('latests.index')
        // ->with('success','latest has been created successfully.');
        $latests = Latest::orderBy('id','asc')->paginate(10);
        return view('latest.crud',compact('latests'))->with('success','latest Has Been updated successfully');

}
/**
* Remove the specified resource from storage.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request, $id){
        $latest = Latest::find($id);
        $latest->status = 0;
        $latest->save();
        // $data['latests'] = DB::table('latests')->where('status','1')->orderBy('id','ASC')->paginate(6);
        return view('latest.index',compact('latest'))->with('success','latest Has Been updated successfully');

}

    /**
* Display the specified resource.
*
* @param  \App\Latest  $latest
* @return \Illuminate\Http\Response
*/
 public function show(Latest $latest)
 {
    $latest->status=0;
    $latest->save();
    $data['latests'] = Latest::orderBy('id','asc')->paginate(10);
    return view('latest.crud',$data)->with('success','latest Has Been updated successfully');

 }
}
