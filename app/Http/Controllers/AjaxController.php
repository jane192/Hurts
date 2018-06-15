<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use App\Parser\Google;
class AjaxController extends Controller
{
    public function postGoogle(){

        $obj=new Google;

        $r=$obj->getParse('https://www.segodnya.ua/tags/hurts.html');
                     if($r==null){
                         $r="";
                     };   
 return $r;
    }

}
