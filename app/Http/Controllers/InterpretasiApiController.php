<?php

namespace App\Http\Controllers;
use App\Models\Variabel;
use App\Models\Interpretasi;

use Illuminate\Http\Request;

class InterpretasiApiController extends Controller
{
    public function index()
    {
        $interpretasis = Interpretasi::select('interpretasis.id','v.nama','v.id as variabel_id','interpretasis.interpretasi')
                ->join('variabels as v','interpretasis.variabel_id','v.id')
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$interpretasis]);
    }

    public function shows($id)
    {
        $inter= Interpretasi::select('interpretasis.id','v.nama','v.id as variabel_id','interpretasis.interpretasi')
                ->join('variabels as v','interpretasis.variabel_id','v.id')
                ->where('interpretasis.variabel_id',$id)
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$inter]);
    }
}
