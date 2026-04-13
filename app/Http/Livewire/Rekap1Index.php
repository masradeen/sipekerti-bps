<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\Nilai1;
use App\Models\Seleksi;
use App\Models\Penilai;
use DB;
use Auth;


use Livewire\Component;

class Rekap1Index extends Component
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
        $seleksis = Seleksi::get();
        $user_id = Auth::user()->id;
        $nominasis = Nilai1::select("bulan", "pegawai_id", DB::raw("sum(nilai1) as rnilai1,sum(nilai2) as rnilai2,sum(nilai3) as rnilai3,sum(nilai4) as rnilai4,sum(nilai5) as rnilai5,sum(nilai6) as rnilai6,sum(nilai7) as rnilai7,sum(total) as rtotal,count(pegawai_id) as rpegawai,sum(is_calon) as rcalon"))
            ->where('is_final', "=", 1)
            ->where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)
            // ->where('insert_by', $user_id)
            ->groupBy('tahun')
            ->groupBy('bulan')
            ->groupBy('pegawai_id')
            ->orderBy('rtotal', 'desc')
            ->get();
        // $nominasis = Nilai1::where('is_final',1)->orderBy('total','desc')->get();
        return view('livewire.rekap1-index', compact('nominasis', 'seleksis'));
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
