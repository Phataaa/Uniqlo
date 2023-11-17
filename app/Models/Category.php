<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'category';
    protected $fillable = ['name', 'type_id'];
    
    public function product() {
        return $this -> hasMany('App\Models\Product');
    }
    public function typeCategory() {
        return $this -> belonngsTo('App\Models\TypeCategory', 'type_id');
    }
}
