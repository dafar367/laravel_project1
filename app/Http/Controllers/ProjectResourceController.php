<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;


class ProjectResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Project = project::all();
        $title = 'project';
        return view("myproject",[
            // 'projects'=>project::allData(),
            'title' =>'project',
            'projects' => $Project
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("createProject", [
            'title' =>'createProject'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        project::create([
            'code' => Str::upper(Str::substr($request->project, 0, 3)),
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mataKuliah,
            'description' => $request->description
        ]);
        return redirect(route('myproject.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //
        
        return view("showproject",[
            'title' =>'project',
            'projects'=>project::where('code',$code)
            // pake first
            ->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = project::findOrFail($id);
        return view("editProject",[
            'title' =>'editproject',
            'project'=> $project
        ]);
        
        //return view('editProject', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $code = Str::upper(Str::substr($request->project,0,3));
        $project = project::findOrFail($id);
        $project->update([
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mataKuliah,
            'description' => $request->description
        ]);

        return redirect(route('myproject.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = project::findOrFail($id);
        $project->delete();
        return redirect(route('myproject.index'));
    }
}
