<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Import;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'accountNumber',
    ];

    public function imports() {
        return $this->hasMany(Import::class, 'supplier_id', 'id');
    }
}
