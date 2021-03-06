<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;
use App\News;

class BaseController extends Controller
{
    public function getIndex()
    {
        $text = Maintext::where('url', 'index')->first();
        $news=News::orderBy('id','DESC')->paginate(10);
        return view('index', compact('text','news'));

    }

    public function getStatic($id = null)
    {
        $text = Maintext::where('url', $id)->first();
        
        return view('static', compact('text'));

    }

    public function getStatics()
    {
        $all = Maintext::where('lang', 'ru')->orderBY('id', 'DESC')-> paginate(20);
        return view('statics', compact('all'));
    }
}
