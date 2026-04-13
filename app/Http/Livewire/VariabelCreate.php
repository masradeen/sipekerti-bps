<?php

namespace App\Http\Livewire;
use App\Models\Variabel;
use App\Models\Kategori;

use Livewire\Component;

class VariabelCreate extends Component
{
    public $nama;
    public $satuan;
    public $kategori;

    public function addVariabel()
    {
        Variabel::create([
            'nama' => $this->nama,
            'satuan' => $this->satuan,
            'kategori_id' => $this->kategori
        ]);

        $this->emit('variabelAdded');

        $this->nama = '';
        $this->satuan = '';
        $this->kategori = '';
    }
    
    public function render()
    {
        $variabels = Variabel::get();
        $kategoris = Kategori::get();
        return view('livewire.variabel-create', compact('variabels','kategoris'));
    }
}
