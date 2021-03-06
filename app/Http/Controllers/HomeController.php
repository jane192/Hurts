<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Cabinet;
use Auth;
use App;

class HomeController extends Controller
{

    public $hurts;
    public function __construct()
    {
        $this->middleware('auth');
        $this->hurts = Cabinet::all();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $hurts=$this->hurts;
        $products=Product::orderBy('id','DESC')->paginate(5);
        //dd($products->all());
        return view('home',compact('hurts','products'));

    }
    public function postIndex(ProductRequest $r){
        if (!empty($_FILES['picture1']['name'])){


            $pic =\App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);


            $r['picture']=$pic;

        }else{
            $pic='';
            $r['picture']='';

        }

        $r['user_id']=Auth::user()->id;
        //unset($r['_token']);

        $r['status']='';
        //dd($r->all());
        //dd($r->all());
        Product::create($r->all());
        return redirect('home');

    }
    public function getDelete($id=null){
        $obj =  Product::find($id);

        //Product::where('id',$id)->delete(); или так
        $pic =\App::make('\App\Libs\Imag')->picdel($obj->picture);
        $obj ->delete();
        return redirect('/home');
    }
    public function getEdit($id=null){
        $obj= Product::find($id);
        $hurts=$this->hurts;
        return view('home.edit', compact('obj','hurts'));

    }


    public
    function postEdit(ProductRequest $r, $id = null)
    {

        $obj = Product::find($id);
        dd($obj->all());
        $obj->name = $r['name'];
        $obj->price = $r['price'];
        $obj->status = $r['status'];
        $obj->product_code = $r['product_code'];
        $obj->save();

        return redirect('/home');
    }
}
