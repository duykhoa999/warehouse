<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edetail extends Model
{
    use HasFactory;
    
    protected $table = 'edetails';

    protected $fillable = [
        'product_id',
        'export_id',
        'amount'
    ];
}
