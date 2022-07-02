<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $table = 'data_teknisi';
    protected $primaryKey = 'ID_TEKNISI';
    protected $fillable = [
        'ID_TEKNISI',
        'ID_PELANGGAN',
        'PASSWORD',
        'NAMA_TEKNISI',
        'ALAMAT_TEKNISI',
        'NO_IDENTITAS_TEKNISI',
        'TGL_MASAK'
    ];
    protected $timestamps = false;
}
