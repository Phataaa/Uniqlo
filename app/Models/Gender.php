<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'gender_category';
    protected $fillable = ['gender'];

    public function typeCategory() {
        return $this -> hasMany('App\Models\TypeCategory');
    }
}
