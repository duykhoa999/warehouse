<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Export;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'accountNumber',
    ];

    public function exports() {
        return $this->hasMany(Export::class, 'export_id', 'id');
    }
}
