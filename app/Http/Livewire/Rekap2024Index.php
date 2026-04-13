<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
// use App\Exports\RekapExport;
use App\Models\Nilai2;
use Illuminate\Support\Facades\DB;
use App\Exports\RekapExport;
// use DB;


class Rekap2024Index extends Component
{
    public $search, $tahun, $bulan, $rekaps;


    protected $updatesQueryString = ['search'];

    public function render()
    {
        $finals_nama = Nilai2::select("nilai2s.tahun", "nilai2s.bulan", "nilai2s.pegawai_id as pegawai_id", "r.nama as nama", DB::raw("sum(total) as rtotal"), DB::raw("count(total) as retotal"))
            ->join('pegawais as r', 'nilai2s.pegawai_id', '=', 'r.id')
            ->groupBy('nilai2s.tahun')
            ->groupBy('nilai2s.bulan')
            ->groupBy('r.nama')
            ->groupBy('pegawai_id')
            ->orderBy('rtotal', 'desc')
            ->where('nilai2s.bulan', $this->bulan)
            ->where('nilai2s.tahun', $this->tahun)
            ->where('nilai2s.is_final', "=", 1)
            ->get();

        $finals = DB::table('nilai2s')
            ->join('pegawais as r', 'nilai2s.penilai_id', '=', 'r.id')
            ->orderBy('total', 'desc')
            ->select("nilai2s.*", "r.nama as nama_penilai")
            ->where('nilai2s.tahun', $this->tahun)
            ->where('nilai2s.bulan', $this->bulan)
            ->where('nilai2s.is_final', "=", 1)
            ->get();

        // \DB::statement("SET SQL_MODE=''");

        $rekapss = DB::table('vw_total')
            ->select('nama', '20nilai_kjk as kjk', '20nilai_ckp as ckp', '20nilai_presensi as presensi', '20nilai_tahap1 as tahap1', '20nilai_tahap2 as tahap2', 'total')
            ->orderBy('total', 'desc')
            ->where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)
            ->take(3);

        $rekaps_all = DB::table('vw_allpegawai')
            ->select('nama', 'tahun', 'tw', 'kjk', 'ckp', 'presensi', 'tahap1', 'tahap2', 'total')
            ->where('tahun', $this->tahun)
            ->where('tw', $this->bulan)
            ->get();


        return view('livewire.rekap2024-index', compact('finals', 'finals_nama', 'rekapss', 'rekaps_all'));
    }

    public function mount()
    {
        $this->tahun;
        $this->bulan;
        $this->filter();
    }

    public function updated($property)
    {
        $this->filter();
    }

    public function filter()
    {
        $this->rekaps = $this->getFilteredUsers($this->tahun, $this->bulan);
    }

    public function getFilteredUsers($tahun, $bulan)
    {
        return DB::table('vw_allpegawai')
            ->select('nama', 'tahun', 'tw', 'kjk', 'ckp', 'presensi', 'tahap1', 'tahap2', 'total')
            ->where('tahun', $this->tahun)
            ->where('tw', $this->bulan)
            ->get();
    }

    public function export()
    {
        return Excel::download(new RekapExport($this->rekaps), 'users.xlsx');
    }
}
