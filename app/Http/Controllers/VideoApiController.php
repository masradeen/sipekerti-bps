<?php

namespace App\Http\Controllers;
use App\Models\Video;
use App\Models\Variabel;
use Illuminate\Http\Request;

class VideoApiController extends Controller
{
    public function index()
    {
        $videos = Video::select('videos.id','v.nama','videos.tautan')
                ->join('variabels as v','videos.variabel_id','v.id')
                ->get();
        return response()->json(['message'=>'Succes', 'data'=>$videos]);
    }
}
