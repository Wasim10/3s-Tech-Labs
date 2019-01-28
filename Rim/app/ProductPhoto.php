<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductPhoto extends Model
{
    //
    protected $fillable = ['filename', 'product_id'];


    public function product(){

    	return $this->belongsTo('App\Product');
    }
}
