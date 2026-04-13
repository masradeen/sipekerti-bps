<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Livewire\Component;

class PegawaiCreate extends Component
{
    public $nama;
    public $nip;
    public $jabatan;

    
        public function addPegawai()
        {
            Pegawai::create(
                [
                'nip_lama' => $this->nip,
                'nama' => $this->nama,
                'jabatan_id' => $this->jabatan
            ]);
            $this->emit('pegawaiAdded');
    
            $this->nip_lama = '';
            $this->nama = '';
            $this->jabatan = '';
        }
    
        public function render()
        {
            $jabatans = Jabatan::get();
            return view('livewire.pegawai-create',compact('jabatans'));
        }
    
}
