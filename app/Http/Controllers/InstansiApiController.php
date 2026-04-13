<?php

namespace App\Http\Controllers;
use App\Models\Instansi;
use DB;

use Illuminate\Http\Request;

class InstansiApiController extends Controller
{
    public function show()
    {
        $instansi = DB::table('instansis')->get();
        dd($instansi);
        return response()->json(['message'=>'Succes', 'data'=>$instansi]);
    }
}
