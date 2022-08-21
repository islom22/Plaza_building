<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Product;
use Illuminate\Http\Request;

class ObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objects = Product::latest()->paginate(12);
      return view('app.objects.index', compact('objects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
      return view('app.objects.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'video' => 'required'
        ]);
  
        if($request->hasFile('video')) {
            $path = $request->file('video')->store('upload/objects', 'public');
            $data['video'] = $path;
        }
  
        Product::create($data);
  
        return redirect()->route('objects.index')->with(['video' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $object)
    {
        $languages = Lang::all();
        return view('app.objects.edit', compact('object', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $object)
    {
        $data = $request->all();
        if($request->hasFile('video')) {
            $path = $request->file('video')->store('upload/objects', 'public');
            $data['video'] = $path;
        }
  
        $object->update($data);
  
        return redirect()->route('objects.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $objects, $id)
    {
        $objects = Product::find($id);
        $objects->delete();

        return redirect()->route('objects.index')->with(['video' => 'Successfully deleted!']);
    }
}
