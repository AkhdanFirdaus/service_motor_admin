<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'jabatan_teknisi';
    protected $primaryKey = 'ID_JABATAN';
    protected $fillable = [
        'ID_JABATAN',
        'NAMA_JABATAN',
        'LEVEL_JABATAN'
    ];
    protected $timestamps = false;
}
