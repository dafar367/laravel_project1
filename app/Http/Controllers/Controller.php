<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contact(){
        return view("hello", [
        'pagetitle' => 'my contact',
        'title' =>'contact'
        ]);
    }

    public function home(){
        return view("home",[
        'title' =>'home',
        'pageTitle' => 'welcome home fren'
        ]);
    }
}
