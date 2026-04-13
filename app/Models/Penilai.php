<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilai extends Model
{
    use HasFactory;
    protected   $fillable = [
        'tahun',
        'bulan',
        'pegawai_id',
        'penilai1',
        'penilai2',
        'penilai3',
        'penilai4',
        // 'penilai5',
        'absensi',
        'ckp',
        'kjk',
        'insert_by',
        'is_final'
    ];

    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai');
    }
}
