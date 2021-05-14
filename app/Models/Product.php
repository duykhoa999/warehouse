<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Import;
use App\Models\Export;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'unit',
        'amount',
        'photo',
        'price'
    ];

    public function imports() {
        return $this->belongsToMany(Import::class, 'import_product', 'product_id', 'import_id');
    }

    public function exports() {
        return $this->belongsToMany(Export::class, 'export_product', 'product_id', 'export_id');
    }
}
