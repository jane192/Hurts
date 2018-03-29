<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()

    {
        
        $songs=Song::orderBy('id','DESC')->paginate(3);
        return view('songs',compact('songs'));
    }
   
        public function getOne($id=null){
      $r=Song::find($id);
      
      return view('songs',compact('r'));
   

}
}
