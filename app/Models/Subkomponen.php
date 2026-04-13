<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkomponen extends Model
{
    protected   $fillable = ['nama','komponen_id'];
    use HasFactory;

    public function komponen()
    {
        return $this->belongsTo('App\Models\Komponen');
    }

    public function indikator()
    {
        return $this->hasMany('App\Models\Indikator');
    }
}
