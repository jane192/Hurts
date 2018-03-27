<?php
namespace App\Providers\ViewComposer;
use Illuminate\Contracts\View\View;
use App\Cabinet;

Class SiteComposer{
    public function compose(View $view){
        $compcatalogs=Cabinet::all();
        $view->with('compcatalogs',$compcatalogs);
    }
    
}
