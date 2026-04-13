<?php

namespace App\Http\Controllers;
use App\Models\Sektoral;
use App\Models\Instansi;
use Illuminate\Http\Request;

class SektoralApiController extends Controller
{
    
    public function index($id)
    {
    $sektor= Sektoral::select('sektorals.id','i.nama','i.id as instansi_id','sektorals.kegiatan','sektorals.waktu','sektorals.image','sektorals.progress')
                ->join('instansis as i','sektorals.instansi_id','i.id')
                ->where('sektorals.instansi_id',$id)
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$sektor]);
    }
    
    public function show()
    {
    $sektoral = Sektoral::get();
    
    return response()->json(['message'=>'Succes', 'data'=>$sektoral]);
    }

    public function showing()
    {
    $instansi = Instansi::get();
    
    return response()->json(['message'=>'Succes', 'data'=>$instansi]);
    }
}
