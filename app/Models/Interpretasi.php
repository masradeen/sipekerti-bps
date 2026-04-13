<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interpretasi extends Model
{
    protected   $fillable = ['interpretasi','variabel_id'];
    use HasFactory;

    public function variabel()
    {
        return $this->belongsTo('App\Models\Variabel');
    }
}
