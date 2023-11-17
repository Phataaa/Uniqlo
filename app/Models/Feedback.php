<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'feedback';
    protected $fillable = ['product_id', 'user_id', 'comment'];

    public function user() {
        return $this -> belongsTo('App\Models\User', 'user_id');
    }
    
    public function product() {
        return $this -> belongsTo('App\Models\Product', 'product_id');
    }
}
