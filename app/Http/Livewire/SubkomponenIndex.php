<?php

namespace App\Http\Livewire;
use App\Models\Subkomponen;
use App\Models\Komponen;
use Livewire\Component;

class SubkomponenIndex extends Component
{
    protected $listeners = [
        'subkomponenAdded',
    ];

    public function subkomponenAdded()
    {
        # code...
    }

    public function render()
    {
        $subkomponens = Subkomponen::get();
        $komponens = Komponen::get();
        return view('livewire.subkomponen-index', compact('subkomponens', 'komponens'));
    }
}
