<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'size';
    protected $fillable = ['name'];

    public function productRelative() {
        return $this -> hasMany('App\Models\SizeRelative');
    }
}
