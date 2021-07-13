<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Edetail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Export extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $table = 'exports';

    protected $fillable = [
        'date',
        'customer_id',
        'user_id',
        'success'
    ];

    protected $cascadeDeletes = ['edetails'];

    protected $dates = ['deleted_at'];

    public function edetails() {
        return $this->hasMany(Edetail::class);
    }
}
