<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $table = 'data_transaksi_barang';
    protected $primaryKey = 'ID_TRANSAKSI_BARANG';
    protected $fillable = [
        'ID_TRANSAKSI_BARANG',
        'ID_BARANG',
        'ID_JASA',
        'QTY',
        'HARGA_SATUAN',
        'HARGA_TOTAL'
    ];
    protected $timestamps = false;
}
