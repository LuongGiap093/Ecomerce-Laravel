<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $fillable = [
        'category_name',
        'image',
        'category_desc',
        'category_status',
       
    ];
    protected $primaryKey = 'category_id';
    public function owner(){
        return $this->belongsTo('User');
    }
    // In product model
    public function product(){
        return $this->hasMany('App\Models\Product', 'category_id');
    }
}
