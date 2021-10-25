<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function createProject(){
        return view("createProject", [
        'title' =>'createProject'
        ]);
    }

    public function show($code){
        return view("showproject",[
            'title' =>'project',
            'projects'=>project::where('code',$code)
            // pake first
            ->get()->first()
        ]);
    }

    public function indexProject(){
        $Project = project::all();
        $title = 'project';
        return view("myproject",[
            // 'projects'=>project::allData(),
            'title' =>'project',
            'projects' => $Project
            
        ]);
        return view('myproject', compact('projects', 'title'));
    }

    
    
    
}
