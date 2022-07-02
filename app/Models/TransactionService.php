<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionService extends Model
{
    use HasFactory;

    protected $table = 'data_transaksi_jasa';
    protected $primaryKey = 'ID_JASA';
    protected $fillable = [
        'ID_JASA',
        'ID_TEKNISI',
        'HARGA_JASA'
    ];
    protected $timestamps = false;
}
