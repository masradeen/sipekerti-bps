<?php

namespace App\Http\Livewire;

use App\Models\Presensi;
use DB;
use Auth;
use App\Imports\PresensiImport;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Component;
use Livewire\WithFileUploads;

class PresensiCreate extends Component
{
    public $pegawai_id;
    public $tahun;
    public $bulan;
    public $file;
    public $satker_id;

    use WithFileUploads;

    protected $updatesQueryString = ['bulan', 'tahun', 'file', 'satker_id'];

    protected $rules = [

        'bulan' => 'required',
        'tahun' => 'required',
        'file' => 'required',
        'satker_id' => 'required',

    ];


    public function addPresensi()
    {
        $user_id = Auth::user()->id;
        // Nilai1::updateOrCreate([
        //     'pegawai_id' => $this->pegawai_id,
        //     'tahun' => $this->tahun,
        //     'bulan' => $this->bulan,
        //     'insert_by' => $user_id
        // ]);

        // validasi
        $this->validate();

        $tahun = $this->tahun;
        $bulan = $this->bulan;
        $satker_id = $this->satker_id;

        // menangkap file excel
        $file = $this->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        // import data
        Excel::import(new PresensiImport($tahun, $bulan, $user_id, $satker_id), $file);

        // notifikasi dengan session
        Session::flash('sukses', 'Data Siswa Berhasil Diimport!');


        $this->emit('presensiAdded');

        $this->pegawai_id = '';
        $this->bulan = '';
        $this->tahun = '';
        $this->satker_id = '';
    }


    public function render()
    {
        return view('livewire.presensi-create');
    }
}
