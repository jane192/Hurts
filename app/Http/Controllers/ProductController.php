<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cabinet;
use Auth;
use App;
class ProductController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()

    {
        
        $products=Product::orderBy('id','DESC')->paginate(5);
        return view('products',compact('products'));
    }
   
       
   

}
