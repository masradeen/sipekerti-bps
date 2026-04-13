<?php

namespace App\Http\Livewire;
use App\Models\Variabel;
use App\Models\Interpretasi;

use Livewire\Component;

class InterpretasiIndex extends Component
{
    protected $listeners = [
        'interpretasiAdded',
    ];

    public function interpretasiAdded()
    {
        # code...
    }
    
    public function render()
    {
        $variabels = Variabel::get();
        $interpretasis = Interpretasi::get();
        return view('livewire.interpretasi-index',compact('variabels','interpretasis'));
    }
}
