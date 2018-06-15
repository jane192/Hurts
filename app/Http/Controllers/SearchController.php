<?php

namespace App\Http\Controllers;

use App\Musics;
use App\Maintext;
use App;
use App\News;
use App\Music;
use App\Song;


class SearchController extends Controller{ 
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
  public function getSearch()

{
    if ($_GET['str']){
        $str=$_GET['str'];
        $music=Musics::where('name','LIKE','%'.$str.'%')->limit(10)->get();
        $news=News::where('name','LIKE','%'.$str.'%')->limit(10)->get();
        $song=Song::where('name','LIKE','%'.$str.'%')->limit(10)->get();

        return view('search',compact('music','news','song'));
    }
}

}
