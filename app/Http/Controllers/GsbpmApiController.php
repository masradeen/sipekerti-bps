<?php

namespace App\Http\Controllers;
use App\Models\Gsbpm;

use Illuminate\Http\Request;

class GsbpmApiController extends Controller
{
    public function index()
    {
    $gsbpm = Gsbpm::select('urutan','tahapan','tahapan2')->get();
    return response()->json(['message'=>'Succes', 'data'=>$gsbpm]);
    }
}
