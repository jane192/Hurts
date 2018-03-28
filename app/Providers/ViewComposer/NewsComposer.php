<?php
namespace App\Providers\ViewComposer;
use Illuminate\Contracts\View\View;
use App\News;

Class NewsComposer{
    public function compose(View $view){
        $compnews=News::orderBy('id','Desc')->limit(4)->get();
        $view->with('compnews',$compnews);
    }
    
}
