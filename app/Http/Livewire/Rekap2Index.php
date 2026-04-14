<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pegawai;
use App\Models\Nilai1;
use App\Models\Nilai2;
use App\Models\Seleksi;
use App\Models\Penilai;
use DB;


class Rekap2Index extends Component
{
    public $search, $tahun, $bulan;


    protected $updatesQueryString = ['search'];

    public function render()
    {
        $nominasis = Nilai1::select("nilai1s.tahun", "nilai1s.bulan", "nilai1s.pegawai_id", DB::raw("sum(total) as rtotal,sum(is_calon) as rcalon"))
            // ->where('is_final',"!=",0)
            ->groupBy('nilai1s.tahun')
            ->groupBy('nilai1s.bulan')
            ->groupBy('pegawai_id')
            ->orderBy('rtotal', 'desc')
            ->where('nilai1s.bulan', $this->bulan)
            ->where('nilai1s.tahun', $this->tahun)
            ->get();

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

        $rekaps = Nilai2::select(
            "nilai2s.tahun",
            "nilai2s.bulan",
            "nilai2s.pegawai_id as pegawai_id",
            "r.nama as nama",
            DB::raw("sum(total) as total"),
            DB::raw("count(total) as ctotal"),
            DB::raw("avg(40total) as rtotal"),
            DB::raw("avg(20ckp) as rckp"),
            DB::raw("avg(20absensi) as rabsensi"),
            DB::raw("avg(20kjk) as rkjk"),
            DB::raw("(avg(40total))
                             +avg(20ckp)
                             +avg(20absensi)
                             +avg(20kjk) as rfinal")
        )
            ->join('pegawais as r', 'nilai2s.pegawai_id', '=', 'r.id')
            ->join('penilais as n', 'nilai2s.pegawai_id', '=', 'n.pegawai_id')
            ->groupBy('nilai2s.tahun')
            ->groupBy('nilai2s.bulan')
            ->groupBy('r.nama')
            ->groupBy('pegawai_id')
            ->orderBy('rfinal', 'desc')
            ->where('nilai2s.tahun', $this->tahun)
            ->where('nilai2s.bulan', $this->bulan)
            ->where('nilai2s.is_final', "!=", 0)
            ->take(3)
        // ->get();

        $namaf = Nilai2::select("nilai2s.tahun", "nilai2s.bulan", "nilai2s.pegawai_id as pegawai_id", "r.nama as nama", DB::raw("avg(40total) as rtotal"), DB::raw("avg(20ckp) as rckp"), DB::raw("avg(20absensi) as rabsensi"), DB::raw("avg(20kjk) as rkjk"), DB::raw("avg(40total)+avg(20ckp)+avg(20absensi)+avg(20kjk) as rfinal"))
            ->join('pegawais as r', 'nilai2s.pegawai_id', '=', 'r.id')
            ->join('penilais as n', 'nilai2s.pegawai_id', '=', 'n.pegawai_id')
            ->groupBy('nilai2s.tahun')
            ->groupBy('nilai2s.bulan')
            ->groupBy('r.nama')
            ->groupBy('pegawai_id')
            ->orderBy('rfinal', 'desc')
            ->where('nilai2s.tahun', $this->tahun)
            ->where('nilai2s.bulan', $this->bulan)
            ->get();


        // $nominasis = Nilai1::where('is_final',1)->orderBy('total','desc')->get();
        // return view('livewire.rekap1-index',compact('nominasis'));

        return view('livewire.rekap2-index', compact('nominasis', 'finals', 'finals_nama', 'rekaps', 'namaf'));
    }
}