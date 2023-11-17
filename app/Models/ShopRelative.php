<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopRelative extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'shopSystemRelative';
    protected $filable = ['product_id', 'shop_id', 'quanity'];
    public function product() {
        return $this ->belongsTo('App/Models/Product');
    }
    public function shop() {
        return $this -> belongsTo('App/Models/Shop');
    }
}
