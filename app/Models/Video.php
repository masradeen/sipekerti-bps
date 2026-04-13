<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected   $fillable = ['tautan','variabel_id'];
    use HasFactory;

    public function variabel()
    {
        return $this->belongsTo('App\Models\Variabel');
    }
}
