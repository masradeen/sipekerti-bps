<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\Nilai1;
use DB;
use Auth;

use Livewire\Component;

class Tahap1Create extends Component
{
    public $pegawai_id;
    public $tahun;
    public $bulan;
    public $hitung;
    // public $cek;

    protected $updatesQueryString = ['bulan'];


    public function addTahap1()
    {
        $user_id = Auth::user()->id;
    	$satker_id = Auth::user()->satker_id;
        Nilai1::updateOrCreate([
            'pegawai_id' => $this->pegawai_id,
            'tahun' => $this->tahun,
            'bulan' => $this->bulan,
            'insert_by' => $user_id
        ]);


        $this->emit('tahap1Added');

        $this->pegawai_id = '';
        $this->bulan = '';
        $this->tahun = '';
    	$this->satker_id = '';
    }


    public function render()
    {
        $user_id = Auth::user()->id;
        $cek = Nilai1::where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)
            ->where('insert_by', $user_id)->count();
        $date = date("m");

        $satker_id = Auth::user()->user_id;
        $pegawais = Pegawai::where('status', 1)
            ->where('jabatan_id', "!=", 2)
            ->whereNotIn('nip_lama', array(340015050))
            ->orderBy('nama', 'asc')
            ->get();
        return view('livewire.tahap1-create', compact('pegawais', 'cek', 'date'));
    }
}
