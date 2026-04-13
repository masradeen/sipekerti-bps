<?php

namespace App\Http\Livewire;


use DB;
use Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Livewire\Component;

class ProgressPegawai extends Component
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
        $tahun = $this->tahun;
        $bulan = $this->bulan;
        // $que = "'SELECT v.tahun,v.bulan, p.nip_lama, p.nama, if(v.milih>0, v.milih,"") as milih FROM `pegawai` p left JOIN (select * from vw_progress WHERE tahun =2024 and bulan = 2 ) v on v.nip_lama = p.nip_lama WHERE p.status =1 and p.satker_id = 1 ORDER BY v.milih desc, p.nama asc; '"; 
        // $nominasis = DB::select(DB::raw('SELECT v.tahun,v.bulan, p.nip_lama, p.nama, if(v.milih>0, v.milih,"") as milih FROM `pegawais` p left JOIN (select * from vw_progress WHERE tahun =2024 and bulan = 4 ) v on v.nip_lama = p.nip_lama WHERE p.status =1 and p.nip_lama !="340015050"  and p.satker_id = 1 ORDER BY v.milih desc, p.nama asc; '));

        $nominasis =
            DB::table('users AS u')
            ->leftJoin('nilai1s AS n', function ($join) {
                $join->on('n.insert_by', '=', 'u.id')
                    ->where('n.tahun', '=', $this->tahun)
                    ->where('n.bulan', '=', $this->bulan);
            })
            ->leftJoin('pegawais AS p', 'u.pegawai_id', '=', 'p.id')
            ->select(
                'p.nip_lama AS nip_lama',
                'u.nama AS nama',
                DB::raw('count(n.insert_by) AS milih')
            )
            ->where('p.status', 1)
            ->where('p.nip_lama', '<>', '340015050')
            ->groupBy('u.nama', 'p.nip_lama')
            ->orderBy('u.nama')
            ->get();

        // dd($nominasis);

        // dd($tahun);
        // $nominasis = DB::table('vw_progress')
        //     ->where('tahun', $this->tahun)
        //     ->where('bulan', $this->bulan)
        //     ->get();

        return view('livewire.progress-pegawai', compact('nominasis'));
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
}
