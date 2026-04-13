<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected   $fillable = ['nama'];
    use HasFactory;

    public function subkomponen () 
    {
        return $this->hasMany('App\Models\Subkomponen');
    }
}
