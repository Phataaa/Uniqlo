<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'shop';
    protected $fillable = ['postalCode', 'address', 'name'];
    public function shopSystemRelative() {
        return $this ->hasMany('App/Models/ShopRelative');
    }
}
