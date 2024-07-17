<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $guarded = [
        'id'
    ];

    // ...

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
