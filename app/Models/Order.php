<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $fillable = ['name', 'address', 'date', 'number', 'status_deliver', 'note', 'user_id', 'product_id', 'total_money'];
    
    public function user() {
        return $this -> belongsTo('App\Models\User', 'user_id');
    }
   public function product() {
    return $this -> belongsTo('App/Models/Product', 'product_id');
   }
}