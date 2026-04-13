<?php

namespace App\Http\Livewire;
use App\Models\Jabatan;
use Livewire\Component;

class JabatanCreate extends Component
{
    public $nama;

    public function addJabatan()
        {
            Jabatan::create(['nama' => $this->nama]);
            
            $this->emit('jabatanAdded');
    
            $this->nama = '';
        }

    public function render()
    {
        return view('livewire.jabatan-create');
    }
}
