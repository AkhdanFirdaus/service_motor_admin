<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'data_barang';
    protected $primaryKey = 'ID_BARANG';
    protected $fillable = ['ID_BARANG', 'NAMA_BARANG', 'HARGA_BARANG'];
    protected $timestamps = false;
}
