<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'nopol',
        'brand',
        'problem',
        'diagnose_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
