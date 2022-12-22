<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket_pesawat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'awal_keberangkatan',
        'tujuan_keberangkatan',
        'no_penerbangan',
        'harga',
    ];
}
