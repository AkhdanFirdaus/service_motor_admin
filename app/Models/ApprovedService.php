<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedService extends Model
{
    use HasFactory;

    protected $fillable = [
        'technician_id',
        'customer_id',
        'summary_problem',
    ];

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function serviceTypes()
    {
        return $this->hasMany(ServiceType::class);
    }

    public function serviceItems()
    {
        return $this->hasMany(ServiceItem::class);
    }
}
