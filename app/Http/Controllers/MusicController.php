<?php

namespace App\Http\Controllers;


use App\Musics;
use App\Cabinet;
use Auth;
use App;

class MusicController extends Controller
{

    
    public function __construct()
    {
        
        //$this->hurts = Musics::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()

    {
       $cabinet=Cabinet::all();      
        return view('music',compact('cabinet'));
        
    }
}
