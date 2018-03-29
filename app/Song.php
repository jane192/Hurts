<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'songs';
    
    protected $fillable = [
          'name',
          'text_song',
          'albom'
    ];
    

    public static function boot()
    {
        parent::boot();

        Song::observe(new UserActionsObserver);
    }
    
    
    
    
}
