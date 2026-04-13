<?php

namespace App\Http\Livewire;
use App\Models\Subkomponen;
use App\Models\Komponen;

use Livewire\Component;

class SubkomponenCreate extends Component
{
    public $nama;
    public $komponen;

    public function addSubkomponen()
    {
        Subkomponen::create([
            'nama' => $this->nama,
            'komponen_id' => $this->komponen
        ]);

        $this->emit('subkomponenAdded');

        $this->nama = '';
        $this->komponen = '';
    }

    
    public function render()
    {
        $subkomponens = Subkomponen::get();
        $komponens = Komponen::get();
        return view('livewire.subkomponen-create',compact('subkomponens', 'komponens'));
    }
}
