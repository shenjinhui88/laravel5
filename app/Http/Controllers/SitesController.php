<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitesController extends Controller
{
    //
    public function index(){
        return view("welcome");
    }

    public function about(){
        $first = 'sjh';
        $last = 'xg';
        return view("sites.about",compact('first','last'));
    }

    public function contact(){
        $people = array(
            "sjh",
            "xf",
            "jxd"
        );
        return view("sites.contact",compact('people'));
    }

}
