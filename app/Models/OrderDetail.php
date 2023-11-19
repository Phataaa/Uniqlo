<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'order_detail';
    protected $fillable = ['total', 'amount', 'order_id', 'product_id'];
    public function product() {
        return $this -> belongTos('App/Models/Product', 'product_id');
    }
    public function order() {
        return $this -> belongTos('App/Models/Order', 'order_id');
    }
}
