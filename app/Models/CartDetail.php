<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'cart_detail';
    protected $fillable = ['cart_id', 'product_id', 'amount', 'total'];
    public function cart() {
        return $this -> belongTos('App/Models/Cart', 'cart_id');
    } 
    public function product() {
        return $this -> belongTos('App/Models/Product', 'product_id');
    }
}
