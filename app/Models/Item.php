<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'price'];

    public function serviceItem()
    {
        return $this->belongsTo(ServiceItem::class);
    }
}
