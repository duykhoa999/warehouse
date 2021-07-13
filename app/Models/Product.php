<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Import;
use App\Models\Export;
use App\Models\Idetail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'unit',
        'amount',
        'photo',
        'priceIm',
        'priceEx',
    ];

    protected $cascadeDeletes = ['idetails'];

    protected $dates = ['deleted_at'];

    public function idetails() {
        return $this->hasMany(Idetail::class);
    }
}
