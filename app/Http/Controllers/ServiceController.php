<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Service;
use App\Models\ServiceProcess;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(12);
        return view('app.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        return view('app.services.create', compact('languages'));
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
            'title' => 'required',
        ]);

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/services', 'public');
            $data['img'] = $path;
        }

        // if($request->hasfile('img'))
        // {
        //     $file = $request->file('img');
        //     $extention = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extention;
        //     $file->move('uploads/services/', $filename);
        //     $request->img = $filename;
        // }

        Service::create($data);

        return redirect()->route('services.index')->with(['message' => 'Successfully added!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $languages = Lang::all();
        return view('app.services.edit', compact('service', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required'
        ]);

        if($request->hasFile('img')) {
            $path = $request->file('img')->store('upload/services', 'public');
            $data['img'] = $path;
        }

        $service->update($data);

        return redirect()->route('services.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        // $service = Service::find($id);
        $service->delete();
        return redirect()->route('services.index')->with(['message' => 'Successfully deleted!']);
    }
}
