<?php

namespace App\Http\Livewire;
use App\Models\Seleksi;

use Livewire\Component;

class SeleksiIndex extends Component
{
    protected $listeners = [
        'seleksiAdded',
    ];

    public function seleksiAdded()
    {
        # code...
    }

    public function render()
    {
        $seleksis = Seleksi::get();
        return view('livewire.seleksi-index',compact('seleksis'));
    }
}
