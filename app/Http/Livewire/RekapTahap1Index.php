<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\Nilai1;
use App\Models\Seleksi;
use App\Models\Penilai;
use DB;

use Livewire\Component;

class RekapTahap1Index extends Component
{

    public $tahun;
    public $bulan;
    public $nip_lama;
    public $pegawai_id;
    public $nama_pegawais;
    public $search;

    protected $updatesQueryString = ['search'];

    public function render()
    {
        \DB::statement("SET SQL_MODE=''");
        $nominasis = DB::table('vw_total')->where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)->get();

        return view('livewire.rekap-tahap1-index', compact('nominasis'));
    }

    public function edit($pegawai_id)
    {
        $this->updateMode = true;
        $nominasis = Nilai1::where('pegawai_id', $pegawai_id)->first();
        // $this->nilai_id = $id;
        // $this->bulan = $nominasis->bulan;
        $this->pegawai_id = $nominasis->pegawai_id;
        $this->nama_pegawais = $nominasis->pegawai->nama;
    }

    private function resetInputFields()
    {
        $this->nilai1 = '';
        $this->nilai2 = '';
        $this->nilai3 = '';
        $this->nilai4 = '';
        $this->nilai5 = '';
        $this->nilai6 = '';
        $this->nilai7 = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function pilih()
    {
        if ($this->pegawai_id) {
            $nilai = Nilai1::where('pegawai_id', '=', $this->pegawai_id)->where('tahun', $this->tahun)->where('bulan', $this->bulan);
            $nilai->update([
                'is_calon' => '1',
                'updated_at' => now(),
            ]);

            $bulanp = Nilai1::where('pegawai_id', '=', $this->pegawai_id)->value('bulan');
            $penilai1 = Pegawai::where('jabatan_id', '2')->value('id');
            $penilai2 = Pegawai::where('jabatan_id', '2')->value('id');
            $penilai3 = Pegawai::where('jabatan_id', '2')->value('id');
            $penilai4 = Pegawai::where('jabatan_id', '2')->value('id');
            $penilai5 = Pegawai::where('jabatan_id', '2')->value('id');

            Penilai::updateOrCreate(
                [
                    'tahun' => $this->tahun,
                    'bulan' => $this->bulan,
                    // 'bulan' => $bulanp
                    'pegawai_id' => $this->pegawai_id
                ],
                [
                    'penilai1' => $penilai1,
                    'penilai2' => $penilai2,
                    'penilai3' => $penilai3,
                    'penilai4' => $penilai4,
                    'penilai5' => $penilai5,
                ]
            );

            $this->updateMode = false;
            session()->flash('message', 'Pegawai Berhasil Dicalonkan.');
            $this->resetInputFields();
        }
    }
}
