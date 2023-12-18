<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    public function product_type()
    {
        return $this->belongTo('App\ProductType','id_type','id'); 
    } 

    public function bill_detail()
    {
        return $this->hasMany('App\BillDetail','id_product','id'); 
    }

    public function comment()
    {
        return $this->belongTo(Comment::class,'id_type','id'); 
    }
    
    public function wishlist()
    {
        return $this->belongTo(Comment::class,'id_type','id');
    }
}
