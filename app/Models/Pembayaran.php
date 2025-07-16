<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'id_pesanan',
        'tanggal_bayar',
        'metode_pembayaran',
        'jumlah_bayar',
        'status'
    ];
}
