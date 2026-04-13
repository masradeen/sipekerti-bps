<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    protected   $fillable = ['nama','kategori_id','satuan'];
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }

    public function interpretasi () 
    {
        return $this->hasOne('App\Models\Interprtasi');
    }

    public function video () 
    {
        return $this->hasOne('App\Models\Video');
    }

    public function data()
    {
        return $this->hasMany('App\Models\Data');
    }
}
