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
       $compnews=News::orderBy('id','DESC')->paginate(5);
                


        return view('news',compact('compnews'));
        
    }
      public function getOne($id)

    {
       $onenews=News::find($id);      
        return view('onenews',compact('onenews'));
        
    }
}
