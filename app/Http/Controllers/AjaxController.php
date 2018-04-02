<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use App\Parser\Google;
class AjaxController extends Controller
{
    public function postGoogle(){
       $obj=new Google;
        $r=$obj->getParse('https://www.google.by/search?dcr=0&biw=1600&bih=349&tbm=isch&sa=1&ei=SHzCWuKEFqmUmwW866XoBg&q=hurts&oq=hurts&gs_l=psy-ab.3..0i67k1j0l2j0i67k1j0j0i67k1j0l4.10626.10626.0.11182.1.1.0.0.0.0.189.189.0j1.1.0....0...1c.1.64.psy-ab..0.1.189....0.TJVnxjEazDY');
 return $r;
    }
}
