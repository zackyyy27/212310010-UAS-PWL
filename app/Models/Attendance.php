<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'hari',
        'tanggal',
        'waktu_absen_masuk',
        'batas_waktu_absen_masuk',
        'waktu_absen_pulang',
        'batas_waktu_absen_pulang'
    ];
}
