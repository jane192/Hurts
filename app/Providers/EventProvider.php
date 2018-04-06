<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

class EventProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
       user::creating(function($user){
           $body="Спасибо за регистрацию на сайте http";
           
           //dd($user);
           mail($user->email,
               'Сообщение'.$user->name.' с сайта',$body);
       }); 
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
