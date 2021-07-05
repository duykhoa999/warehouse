<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edetail extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'edetails';

    protected $fillable = [
        'product_id',
        'export_id',
        'amount'
    ];
}
