<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany('App\Export', 'export_id', 'id');
    }
}
