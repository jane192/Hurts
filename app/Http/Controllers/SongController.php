<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Musics;

class SongController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()

    {
        
        $songs=Song::orderBy('name')->paginate(20);
        return view('songs',compact('songs'));
    }
   
        public function getOne($id=null){
      $r=Musics::find($id);
      
      return view('onesong',compact('r'));
   

}
}
