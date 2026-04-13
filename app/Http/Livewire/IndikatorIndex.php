<?php

namespace App\Http\Livewire;
use App\Models\Subkomponen;
use App\Models\Komponen;
use App\Models\Indikator;

use Livewire\Component;

class IndikatorIndex extends Component
{
    protected $listeners = [
        'indikatorAdded',
    ];

    public function indikatorAdded()
    {
        # code...
    }
    
    public function render()
    {
        $subkomponens = Subkomponen::get();
        $komponens = Komponen::get();
        $indikators = Indikator::get();

        return view('livewire.indikator-index',compact('subkomponens','komponens','indikators'));
    }
}
