<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Product;

class Import extends Model
{
    use HasFactory;

    protected $table = 'imports';

    protected $fillable = [
        'date',
        'supplier_id',
        'user_id',
        'success'
    ];

    // public function users() {
    //     return $this->belongsTo(User::class, 'user_id' , 'id');
    // }

    // public function suppliers() {
    //     return $this->belongsTo(Supplier::class, 'supplier_id' , 'id');
    // }
}
