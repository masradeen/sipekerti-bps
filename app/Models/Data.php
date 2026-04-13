<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table ='data';
    protected $fillable = ['data','tahun','variabel_id'];

    public function variabel()
    {
        return $this->belongsTo('App\Models\Variabel');
    }
}
