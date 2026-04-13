<?php

namespace App\Http\Livewire;
use App\Models\Data;
use App\Models\Variabel;
use App\Models\Kategori;
use App\Models\Tahun;
use DB;

use Livewire\Component;

class DataIndex extends Component
{
    public $kategori;
    protected $updatesQueryString = ['kategori'];
    
    protected $listeners = [
        'dataAdded',
    ];

    public function dataAdded()
    {
        # code...
    }
    
    
    public function render()
    {
        $datass = Data::get();
        // if ($this->kategori != null) {
        $datas = Data::select('data.variabel_id','data.data','data.tahun','k.id')
                ->join('variabels as v','v.id','data.variabel_id')
                ->join('kategoris as k','k.id','v.kategori_id')
                ->where('k.id',$this->kategori)
                ->get();
        // }
        // $datas = Data::select('data.variabel_id','data.data','data.tahun','k.id')
        //         ->join('variabels as v','v.id','data.variabel_id')
        //         ->join('kategoris as k','k.id','v.kategori_id')
                // ->where('k.id',$this->kategori)
                // ->get();
        // dd($datas);
        $kategoris = Kategori::get();
        $variabels = Variabel::get();
        $tahuns = Tahun::orderBy('tahun','desc')->get();
        return view('livewire.data-index',compact('datas','variabels','tahuns','kategoris'));
    }
}
