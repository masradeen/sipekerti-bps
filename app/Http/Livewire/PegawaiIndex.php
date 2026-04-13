<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\Jabatan;

use Livewire\Component;

class PegawaiIndex extends Component
{
    public $nama, $nip_lama, $jabatan, $status;
    public $updateMode = false;

    protected $listeners = [
        'pegawaiAdded',
    ];

    public function pegawaiAdded()
    {
        # code...
    }

    public function render()
    {
        $pegawais = Pegawai::orderBy('jabatan_id')->get();
        $jabatans = Jabatan::get();
        return view('livewire.pegawai-index', compact('pegawais', 'jabatans'));
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->nip_lama = '';
    }


    public function edit($id)
    {
        $this->updateMode = true;
        $jabatans = Jabatan::get();
        $pegawai = Pegawai::where('id', $id)->first();
        $this->pegawai_id = $id;
        $this->nama = $pegawai->nama;
        $this->nip_lama = $pegawai->nip_lama;
        $this->jabatan = $pegawai->jabatan_id;
        $this->status = $pegawai->status;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        if ($this->pegawai_id) {
            $pegawai = Pegawai::find($this->pegawai_id);
            $pegawai->update([
                'nama' => $this->nama,
                'nip_lama' => $this->nip_lama,
                'jabatan_id' => $this->jabatan,
                'status' => $this->status,
                'updated_at' => now(),

            ]);


            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Pegawai::where('id', $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
