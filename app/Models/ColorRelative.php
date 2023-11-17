<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorRelative extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'color_relative';
    protected $fillable = ['product_id', 'color_id'];
    
    public function product() {
        return $this -> belongsTo('App\Models\Product', 'product_id');
    }
    public function color() {
        return $this -> belongsTo('App\Models\Color', 'color_id'); 
    }
}
