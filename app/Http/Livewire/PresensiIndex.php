<?php

namespace App\Http\Livewire;

use App\Models\Presensi;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PresensiIndex extends Component
{
    public $tahun;
    public $bulan;
    public $presensi_id, $nip;
    public $updateMode = false;
    public $search;

    protected $updatesQueryString = ['search'];

    protected $listeners = [
        'presensiAdded',
    ];

    public function presensiAdded()
    {
        # code...
    }

    public function render()
    {
        $presensis = DB::table('presensis')
            ->select('presensis.nip', 'pegawais.nama', 'presensis.hk', 'presensis.hd', 'presensis.tk', 'presensis.tl', 'presensis.tb', 'presensis.pd', 'presensis.dk', 'presensis.kn', 'presensis.psw', 'presensis.psw1', 'presensis.psw2', 'presensis.psw3', 'presensis.psw4', 'presensis.ht', 'presensis.tl1', 'presensis.tl2', 'presensis.tl3', 'presensis.tl4', 'presensis.cb', 'presensis.cl', 'presensis.cm', 'presensis.cp', 'presensis.cs', 'presensis.ct10', 'presensis.ct11', 'presensis.ct12', 'presensis.cst1', 'presensis.cst2', 'presensis.kjk_ht', 'presensis.kjk_pc', 'presensis.kjk')
            ->where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)
            ->leftjoin('pegawais', 'pegawais.nip_lama', '=', 'presensis.nip')
            ->get();

        $rekaps = DB::table('presensis')
            ->select(DB::raw("bulan , sum(hk) as hk, sum(hd) as hd, sum(tk) as tk, sum(tl) as tl, sum(tb) as tb, sum(pd) as pd, sum(dk) as dk, sum(kn) as kn, sum(psw) as psw, sum(psw1) as psw1, sum(psw2) as psw2, sum(psw3) as psw3, sum(psw4) as psw4, sum(ht) as ht, sum(tl1) as tl1, sum(tl2) as tl2, sum(tl3) as tl3, sum(tl4) as tl4, sum(cb) as cb, sum(cl) as cl, sum(cm) as cm, sum(cp) as cp, sum(cs) as cs, sum(ct10) as ct10, sum(ct11) as ct11, sum(ct12) as ct12, sum(cst1) as cst1, sum(cst2) as cst2, sum(kjk_ht) as kjk_ht, sum(kjk_pc) as kjk_pc, sum(kjk) as kjk, CONCAT(FLOOR(sum(kjk)/1440), ' hari ', FLOOR(sum(kjk)%1440/60), ' jam ', FLOOR(sum(kjk)%60), ' menit'  ) as durasi"))
            ->where('tahun', $this->tahun)
            ->groupBy('bulan')
            ->get();


        return view('livewire.presensi-index', compact('presensis', 'rekaps'));
    }

    private function resetInputFields()
    {
        // $this->nama = '';
    }

    // public function edit($id)
    // {
    //     $this->updateMode = true;
    //     $jabatan = Jabatan::where('id',$id)->first();
    //     $this->nama = $jabatan->nama;
    // }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    // public function update()
    // {
    //     if ($this->jabatan_id) {
    //         $jabatan = Jabatan::find($this->jabatan_id);
    //         $jabatan->update([
    //             'nama' => $this->nama,
    //             'updated_at' => now(),
    //         ]);


    //         $this->updateMode = false;
    //         session()->flash('message', 'Jabatan Updated Successfully.');
    //         $this->resetInputFields();
    //     }
    // }

    public function delete($rekapBulan)
    {
        if ($rekapBulan) {
            Presensi::where('bulan', $rekapBulan)->delete();
            session()->flash('message', 'Rekap bulan' . $rekapBulan . ' di hapus.');
        }
    }
}
