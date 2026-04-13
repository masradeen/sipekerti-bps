<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCkps extends Model
{
    use HasFactory;

    public $table = "employee_ckps";

    protected $guarded = [];
}
