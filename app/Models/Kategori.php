<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected   $fillable = ['nama'];
    use HasFactory;

    public function variabel () 
    {
        return $this->hasMany('App\Models\Variabel');
    }
}
