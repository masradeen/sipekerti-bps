<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::get();
        return response()->json(['message'=>'Succes', 'data'=>$kategoris]);
    }

    public function show($id)
    {
        $kategori = Kategori::find($id);
        return response()->json(['message'=>'Succes', 'data'=>$kategori]);
    }
}
