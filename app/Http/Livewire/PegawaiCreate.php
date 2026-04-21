<?php

namespace App\Http\Livewire;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Livewire\Component;

class PegawaiCreate extends Component
{
    public $nama;
    public $nip;
    public $nip_baru;
    public $jabatan;
    public $satker;


    public function addPegawai()
    {
        Pegawai::create(
            [
                'nip_lama' => $this->nip,
                'nip' => $this->nip_baru,
                'nama' => $this->nama,
                'jabatan_id' => $this->jabatan,
                'satker_id' => $this->satker
            ]
        );
        $this->emit('pegawaiAdded');

        $this->nip_lama = '';
        $this->nip_baru = '';
        $this->nama = '';
        $this->jabatan = '';
        $this->satker = '';
        $this->status = '';
    }

    public function render()
    {
        $jabatans = Jabatan::get();
        return view('livewire.pegawai-create', compact('jabatans'));
    }

}