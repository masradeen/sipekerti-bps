<?php

namespace App\Http\Controllers;
use App\Models\Variabel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class VariabelApiController extends Controller
{
    public function index()
    {
        $variabels  = Variabel::select('variabels.id','variabels.nama', 'k.nama as kategori')
                    ->join('kategoris as k', 'variabels.kategori_id','k.id')
                    ->get();
        return response()->json(['message'=>'Succes', 'data'=>$variabels]);
    }
}
