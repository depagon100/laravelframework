<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabsController extends Controller
{
    //


    public function moduleOne()
    {
        return view('/layout.moduleOne');
    }
    public function moduleTwo()
    {
        return view('/layout.moduleTwo');
    }
    
    public function moduleThree()
    {
        return view('/layout.moduleThree');
    }
    public function moduleFour()
    {
        return view('/layout.moduleFour');
    }
    public function moduleFive()
    {
        return view('/layout.moduleFive');
    }
    public function moduleSix()
    {
        return view('/layout.moduleSix');
    }


}