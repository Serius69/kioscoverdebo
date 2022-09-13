<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {

        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');

        $save = new Photo;
        $save->name = $name;
        $save->path = $path;

        $save->save();

      return redirect('image-upload')->with('status', 'La imagen fue cargada con exito')->with('image',$name);

    }
}
