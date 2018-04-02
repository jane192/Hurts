<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Musics extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'musics';
    
    protected $fillable = [
          'name',          
          'musicsong',
          'user_id',
          'cabinet_id',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        Musics::observe(new UserActionsObserver);
    }
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function cabinet(){
        return $this->belongsTo('App\Cabinet');
    }


    
    
    
}
