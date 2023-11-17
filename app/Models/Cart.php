<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cart';
    protected $fillable = ['amount', 'total', 'order_id', 'product_id', 'user_id'];

    
    public function orders() {
        return $this-> belongsTo('App\Models\Order', 'order_id');
    }

    public function product() {
        return $this -> belongsTo('App\Models\Product', 'product_id');
    }
    public function user() {
        return $this -> belongsTo('App\Models\User', 'user_id');
    }

}
