<?php
namespace App\Providers\ViewComposer;
use Illuminate\Contracts\View\View;
use App\News;

Class NewsComposer{
    public function compose(View $view){
        $compnews=News::all();
        $view->with('compnews',$compnews);
    }
    
}
