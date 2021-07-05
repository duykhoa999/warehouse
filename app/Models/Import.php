<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Import extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'imports';

    protected $fillable = [
        'date',
        'supplier_id',
        'user_id',
        'success'
    ];

    public function products() {
        return $this->belongsToMany(Product::class, 'import_product', 'import_id', 'product_id');
    }

    // public function users() {
    //     return $this->belongsTo(User::class, 'user_id' , 'id');
    // }

    // public function suppliers() {
    //     return $this->belongsTo(Supplier::class, 'supplier_id' , 'id');
    // }
}
