<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeRelative extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'size_relative';
    protected $fillable = ['product_id', 'size_id'];

   public function product() {
        return $this -> belongsTo('App\Models\Product', 'product_id');
   }
   public function size() {
        return $this -> belongsTo('App\MOdels\Size', 'size_id');
   }
}
