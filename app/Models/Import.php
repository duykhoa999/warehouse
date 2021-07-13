<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Idetail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Import extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $table = 'imports';

    protected $fillable = [
        'date',
        'supplier_id',
        'user_id',
        'success'
    ];

    protected $cascadeDeletes = ['idetails'];

    protected $dates = ['deleted_at'];

    public function idetails() {
        return $this->hasMany(Idetail::class);
    }
}
