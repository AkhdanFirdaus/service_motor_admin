<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    use HasFactory;

    protected $table = 'data_service_awal';
    protected $primaryKey = 'NO_SERVICE';
    protected $fillable = ['NO_SERVICE', 'ID_PELANGGAN', 'TGL_LAYANAN', 'MERK', 'KELUHAN'];
    protected $timestamps = false;
}
