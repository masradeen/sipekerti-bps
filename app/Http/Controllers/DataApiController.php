<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\Variabel;

use Illuminate\Http\Request;

class DataApiController extends Controller
{
    public function index()
    {
        $datas = Data::select('data.id','v.nama as nama_variabel','data.variabel_id','data.tahun','data.data','v.satuan')
                ->join('variabels as v','data.variabel_id','v.id')
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$datas]);
    }

    public function show($id)
    {
        $data = Data::find($id);
        return response()->json(['message'=>'Succes', 'data'=>$data]);
    }

    public function shows($id)
    {
        $dara = Data::select('data.id','v.nama as nama_variabel','data.variabel_id','data.tahun','data.data','v.satuan')
                ->join('variabels as v','data.variabel_id','v.id')
                ->where('data.variabel_id',$id)
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$dara]);
    }
}
