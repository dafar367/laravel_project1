<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function show($code){
        return view("showproject",[
            'title' =>'project',
            'projects'=>project::dataWithCode($code)
        ]);
    }

    public function indexProject(){
        return view("myproject",[
            'projects'=>project::allData(),
            'title' =>'project'
        ]);
    }
    
}
