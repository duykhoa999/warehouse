<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    use HasFactory;

    protected $table = 'importProducts';

    protected $fillable = [
        'product_id',
        'import_id',
        'amount'
    ];
    
}
