<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'idetails';

    protected $fillable = [
        'product_id',
        'import_id',
        'amount'
    ];
}
