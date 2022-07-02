<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'approved_service_id',
        'qty',
        'price',
        'total',
    ];

    public function approvedService()
    {
        return $this->belongsTo(ApprovedService::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
