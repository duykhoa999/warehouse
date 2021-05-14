<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $table = 'exports';

    protected $fillable = [
        'date',
        'customer_id',
        'user_id',
        'success'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'user_id' , 'id');
    }

    public function customers() {
        return $this->belongsTo('App\Customer', 'customer_id' , 'id');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'export_product', 'export_id', 'product_id');
    }
}
