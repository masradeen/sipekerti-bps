<?php

namespace App\Http\Livewire;
use App\Models\Variabel;
use App\Models\Interpretasi;
use Livewire\Component;

class InterpretasiCreate extends Component
{
    public $interpretasi;
    public $variabel;

    public function addInterpretasi()
    {
        Interpretasi::create([
            'interpretasi' => $this->interpretasi,
            'variabel_id' => $this->variabel
        ]);

        $this->emit('interpretasiAdded');

        $this->interpretasi = '';
        $this->variabel = '';
    }
    public function render()
    {
        $variabels = Variabel::get();
        $interpretasis = Interpretasi::get();
        return view('livewire.interpretasi-create', compact('variabels','interpretasis'));
    }
}
