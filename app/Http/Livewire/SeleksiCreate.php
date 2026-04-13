<?php

namespace App\Http\Livewire;
use App\Models\Seleksi;
use Livewire\Component;

class SeleksiCreate extends Component
{
    public $indikator;
    public $deskripsi1;
    public $deskripsi2;
    public $deskripsi3;
    
    
    public function addSeleksi()
        {
            Seleksi::create(
                [
                'indikator' => $this->indikator,
                'deskripsi1' => $this->deskripsi1,
                'deskripsi2' => $this->deskripsi2,
                'deskripsi3' => $this->deskripsi3
            ]);
            $this->emit('seleksiAdded');
    
            $this->indikator = '';
            $this->deskripsi1 = '';
            $this->deskripsi2 = '';
            $this->deskripsi3 = '';
        }

    public function render()
    {
        return view('livewire.seleksi-create');
    }
}
