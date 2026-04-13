<?php

namespace App\Http\Livewire;
use App\Models\Variabel;
use App\Models\Kategori;

use Livewire\Component;


class VariabelIndex extends Component
{
    public $kategori;
    protected $updatesQueryString = ['kategori'];

    protected $listeners = [
        'variabelAdded',
    ];

    public function variabelAdded()
    {
        # code...
    }

    public function render()
    {
        $variabels = Variabel::get();
        if ($this->kategori != null) {
            $variabels = Variabel::where('kategori_id', $this->kategori)->get();
        }
        $kategoris = Kategori::get();
        return view('livewire.variabel-index',compact('variabels','kategoris'));
    }
}
