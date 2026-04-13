<?php

namespace App\Http\Livewire;
use App\Models\Kategori;

use Livewire\Component;

class KategoriCreate extends Component
{
    public $nama;

    public function addKategori()
    {
        Kategori::create(['nama' => $this->nama]);
        $this->emit('kategoriAdded');

        $this->nama = '';
    }

    public function render()
    {
        $kategoris = Kategori::get();
        return view('livewire.kategori-create',compact('kategoris'));
    }
}
