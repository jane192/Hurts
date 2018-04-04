<?php

namespace App\Http\Controllers;


use App\News;
use App;
use Auth;

class NewsController extends Controller
{

    
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()

    {
       $compnews=News::get();      
        return view('news',compact('compnews'));
        
    }
}
