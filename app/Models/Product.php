<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = [
        'product_name',
        'product_image',
        'product_price',
        'product_discount',
        'product_desc',   
        'product_size' ,
        'product_status',
        'category_id',
    ];
    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'product_id');
    }
}
