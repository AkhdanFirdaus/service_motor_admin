<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApproveService extends Model
{
    use HasFactory;

    protected $table = 'data_approve_service';
    protected $primaryKey = 'NO_APPROVE_SERVICE';
    protected $fillable = ['NO_APPROVE_SERVICE', 'NO_SERVICE', 'ID_JASA', 'ID_JASA_SERVICE', 'YG_HARUS_DIKERJAKAN'];
    protected $timestamps = false;
}
