<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected   $fillable = ['nama','subkomponen_id'];

    use HasFactory;

    public function subkomponen()
    {
        return $this->belongsTo('App\Models\Subkomponen');
    }
}
