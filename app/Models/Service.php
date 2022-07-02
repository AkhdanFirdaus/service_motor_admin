<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'data_jasa_service';
    protected $primaryKey = 'ID_JASA_SERVICE';
    protected $fillable = ['ID_JASA_SERVICE', 'JENIS_JASA_SERVICE', 'HARGA_JASA_SERVICE'];
    protected $timestamps = false;
}
