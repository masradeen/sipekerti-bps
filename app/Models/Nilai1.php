<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai1 extends Model
{
    use HasFactory;

	protected $primaryKey = 'id';
    public $incrementing = true;

    protected   $fillable = ['tahun','bulan','pegawai_id','nilai1','nilai2','nilai3','nilai4','nilai5','nilai6','nilai7','total','is_final','is_calon','insert_by'];

    public function pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai');
    }
}
