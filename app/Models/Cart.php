<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cart';
    protected $fillable = ['amount', 'total', 'product_id', 'user_id'];

    
    public function user() {
        return $this -> belongsTo('App\Models\User', 'user_id');
    }
    public function cartDetail() {
        return $this -> hasMany('App/Models/CartDetail');
    }

}
