<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'data_pelanggan';
    protected $primaryKey = 'ID_PELANGGAN';
    protected $fillable = ['ID_PELANGGAN', 'NAMA', 'ALAMAT', 'NO_HP', 'NO_STNK'];
    protected $timestamps = false;
}
