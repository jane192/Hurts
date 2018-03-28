<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','body','picture','catalog_id','user_id','showhide','status','product_code'];
    public function catalogs(){
        return $this->belongsTo('App\Cabinet','catalog_id');
    }
}
