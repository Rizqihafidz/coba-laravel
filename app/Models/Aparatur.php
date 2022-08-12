<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparatur extends Model
{
    use HasFactory;
    protected $fillable =['NIP', 'nama', 'jabatan', 'tanggal_menjabat', 'gambar'];
    protected $dates = [
        'tanggal_menjabat'
    ];
}
