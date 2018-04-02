<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    protected $fillable=['name','parent_id'];
    
      public function musics(){
    return $this->hasMany('App\Musics','cabinet_id');
    }
}
