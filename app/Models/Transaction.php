<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'data_transaksi';
    protected $primaryKey = 'ID_TRANSAKSI';
    protected $fillable = [
        'ID_TRANSAKSI',
        'NO_SERVICE',
        'ID_JASA',
        'GRAND_TOTAL',
        'TANGGAL_TRANSAKSI',
        'KELUHAN'
    ];
    protected $timestamps = false;
}
