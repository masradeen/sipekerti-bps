<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    // protected $fillable = ['nip', 'bulan', 'tahun', 'hk'];
    protected $guarded = [];

    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai');
    }
}
