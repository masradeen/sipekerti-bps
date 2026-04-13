<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiEvents extends Model
{
    use HasFactory;
    protected $guarded = [];

    public $table = 'presensi_events';
}
