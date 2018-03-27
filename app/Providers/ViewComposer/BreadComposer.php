<?php
namespace App\Providers\ViewComposer;
use Illuminate\Contracts\View\View;


Class BreadComposer{
    public function compose(View $view){
        $req=explode('/',$_SERVER['REQUEST_URI']);
        //dd($req);
        $view->with('end',end($req));
    }
    
}
