<?php

namespace App\Http\Livewire;
use App\Models\Tahun;

use Livewire\Component;

class TahunCreate extends Component
{
    public $tahun;

    public function addTahun()
    {
        Tahun::create(['tahun' => $this->tahun]);
        $this->emit('tahunAdded');

        $this->tahun = '';
    }
    
    public function render()
    {
        $tahuns = Tahun::get();
        return view('livewire.tahun-create',compact('tahuns'));
    }
}
