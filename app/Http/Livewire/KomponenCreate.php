<?php

namespace App\Http\Livewire;
use App\Models\Komponen;
use Livewire\Component;

class KomponenCreate extends Component
{
    public $nama;

    public function addKomponen()
    {
        Komponen::create(['nama' => $this->nama]);
        $this->emit('komponenAdded');

        $this->nama = '';
    }

    public function render()
    {
        return view('livewire.komponen-create');
    }
}
