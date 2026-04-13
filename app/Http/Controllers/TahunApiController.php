<?php

namespace App\Http\Controllers;
use App\Models\Tahun;
use Illuminate\Http\Request;

class TahunApiController extends Controller
{
    public function index()
    {
        $tahuns = Tahun::select('id','tahun')->orderBy('tahun','desc')->get();
        return response()->json(['message'=>'Succes', 'data'=>$tahuns]);
    }
}
