<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['id','name','description','price','image','quantity','categoryID'];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
