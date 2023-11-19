<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'product';

    public function category() {
        return $this -> belongsTo('App\Models\Category', 'category_id');
    }

    public function image() {
        return $this -> hasMany('App\Models\ProductImage');
    }

    public function feedback() {
        return $this -> hasMany('App\Models\Feedback');
    }
    public function cartDetail() {
        return $this -> hasMany('App\Models\CartDetail');
    }
    public function sizeRelative() {
        return $this -> hasMany('App\Models\SizeRelative');
    }
    public function colorRelative() {
        return $this -> hasMany('App\Models\ColorRelative');
    }
    public function shopRelative() {
        return $this -> hasMany('App\Models\ShopRelative');
    }
    public function orderDetail() {
        return $this -> hasOne('App/Models/OrderDetail');
    }
    protected $fillable = ['name', 'description', 'overview', 'metetial', 'category_id']; 
}
