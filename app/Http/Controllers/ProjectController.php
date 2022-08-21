<?php

namespace App\Http\Controllers;

use App\Models\Lang;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->with('projectimage')->paginate(12);
        $images = ProjectImage::all();
        
      return view('app.projects.index', compact('projects','images'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Lang::all();
        return view('app.projects.create', compact('languages'));
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
        logger($request);
        $request->validate([
            'video' => 'required'
        ]);
  
        if($request->hasFile('video')) {
            $path = $request->file('video')->store('upload/projects', 'public');
            $data['video'] = $path;
        }

        // if($request->hasFile('image')) {
        //     $path = $request->file('image')->store('upload/project_image', 'public');
        //     $data['image'] = $path;
        // }

        $consult = Project::create($data);
       
        if($request->hasFile('images')){
            foreach($request->file('images') as $item){
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($item->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $uploade_path = 'upload/project_image/';
                $image_url = $uploade_path.$image_full_name;
                $item->move($uploade_path,$image_full_name);

                ProjectImage::create([
                    'image' => $image_url,
                    'project_id' => $consult->id
                ]);
            }
        }

        // $consult = Project::create( $data);
        
        // ProjectImage::create([
        //     'image' =>$data['image'],
        //     'project_id'=>$consult->id
        // ]);    
        // dd($data);
        return redirect()->route('projects.index')->with(['video' => 'Successfully added!']);
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
    public function edit($id)
    {
        $languages = Lang::all();
        $project = Project::find($id);
        return view('app.projects.edit', compact('project', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        if($request->hasFile('video')) {
            $path = $request->file('video')->store('upload/projects', 'public');
            $data['video'] = $path;
        }
  
        $project->update($data);
  
        return redirect()->route('projects.index')->with(['message' => 'Successfully updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Project $projects, $id)
    {
        $projects = Project::find($id);
        $projects->delete();

        return redirect()->route('projects.index')->with(['video' => 'Successfully deleted!']);
    }
}
