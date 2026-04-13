<?php

namespace App\Http\Livewire;
use App\Models\Subkomponen;
use App\Models\Komponen;
use App\Models\Indikator;

use Livewire\Component;

class IndikatorCreate extends Component
{
    public $nama;
    public $komponen;
    public $subkomponen;
    public $indikator;

    public function addIndikator()
    {
        Indikator::create([
            'nama' => $this->nama,
            'subkomponen_id' => $this->subkomponen
        ]);

        $this->emit('indikatorAdded');

        $this->nama = '';
        $this->subkomponen = '';
    }
    
    public function render()
    {
        $subkomponens = Subkomponen::get();
        $komponens = Komponen::get();
        $indikators = Indikator::get();
        return view('livewire.indikator-create',compact('subkomponens','komponens','indikators'));
    }
}
