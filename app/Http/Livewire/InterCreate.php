<?php

namespace App\Http\Livewire;
use App\Models\Variabel;
use App\Models\Interpretasi;
use Livewire\Component;

class InterCreate extends Component
{
    public $interpretasi;
    public $variabel;

    public function render()
    {
        $variabels = Variabel::get();
        return view('livewire.inter-create',compact('variabels'));
    }
}
