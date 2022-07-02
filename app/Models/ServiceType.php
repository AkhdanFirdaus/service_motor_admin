<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = ['approved_service_id', 'service_id'];

    public function approvedService()
    {
        return $this->belongsTo(ApprovedService::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
