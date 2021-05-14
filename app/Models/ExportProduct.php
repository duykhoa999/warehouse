<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportProduct extends Model
{
    use HasFactory;

    protected $table = 'exportProducts';

    protected $fillable = [
        'product_id',
        'export_id',
        'amount'
    ];
}
