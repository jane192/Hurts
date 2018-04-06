<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Song;
use App\Cabinet;   

class DocController extends Controller
{
    public function getSong($id){
        $song=Song::find($id);
        $album=Cabinet::where('name',$song->albom)->first();
        if($album){
            $picture = "<p align='center'><img src='http://".$_SERVER['SERVER_NAME']."/public/images/".$album->picture."'/></p>";
        }else{
            $picture="";
        }
        $headers=array(
        "Content-Type"=>"oplication/msword",
            "Content-Disposition"=>"attachment;Filename={$song->name}.doc"
        );
        $html="<html>
        <head>
        <meta charset='UTF-8'>
        </head>
          <body>
          <p>{$song->albom}</p>
          {$picture}
        <h2>{$song->name}</h2>
        
            $song->text_song
            
            </body>
            
            </html>";
            
        return Response::make($html,200,$headers);
            
    }
}
