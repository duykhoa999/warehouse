<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    protected $table = 'imports';

    protected $fillable = [
        'date',
        'supplier_id',
        'user_id',
        'success'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'user_id' , 'id');
    }

    public function suppliers() {
        return $this->belongsTo('App\Supplier', 'supplier_id' , 'id');
    }

    public function products() {
        return $this->belongsToMany('App\Product', 'import_product', 'import_id', 'product_id');
    }
}
