<?php

namespace App\Http\Livewire;
use App\Models\Data;
use App\Models\Variabel;
use App\Models\Tahun;

use Livewire\Component;

class DataCreate extends Component
{
    public $data;
    public $variabel;
    public $tahun;

    public function addData()
    {
        Data::create([
            'data' => $this->data,
            'tahun' => $this->tahun,
            'variabel_id' => $this->variabel
        ]);

        $this->emit('dataAdded');

        $this->data = '';
        $this->variabel = '';
        $this->tahun = '';
    }
    
    public function render()
    {
        $variabels = Variabel::get();
        $tahuns = Tahun::orderBy('tahun','desc')->get();
        $datas = Data::get();
        return view('livewire.data-create',compact('datas','tahuns','variabels'));
    }
}
