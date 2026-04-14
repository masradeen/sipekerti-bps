<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['nip_lama', 'nama', 'satker_id', 'jabatan_id', 'status', 'update_at'];


    public function nilai1()
    {
        return $this->hasMany('App\Models\Nilai1');
    }

    public function presensi()
    {
        return $this->hasMany('App\Models\Presensi');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Jabatan');
    }

    public function satker()
    {
        return $this->belongsTo('App\Models\Satker');
    }

    public function penilai()
    {
        return $this->hasMany('App\Models\Penilai');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}