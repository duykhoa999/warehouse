<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\Product;

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
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'customer_id' , 'id');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'export_product', 'export_id', 'product_id');
    }
}
