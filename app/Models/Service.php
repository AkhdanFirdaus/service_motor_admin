<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'price'];

    public function serviceTypes()
    {
        return $this->hasMany(ServiceType::class);
    }
}
