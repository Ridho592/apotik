<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = [
        'Nama Obat',
        'Merk',
        'Suplier',
    ];
}
