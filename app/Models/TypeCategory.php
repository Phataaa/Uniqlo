<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'type_category';
    protected $fillable = ['type', 'gender_id'];

    public function gender() {
        return $this -> belongsTo('App\Models\Gender');
    }
}
