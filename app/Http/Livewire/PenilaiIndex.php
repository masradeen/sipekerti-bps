<?php

namespace App\Http\Livewire;

use App\Models\Penilai;
use App\Models\Pegawai;
use App\Models\Nilai2;
use DB;

use Livewire\Component;

class PenilaiIndex extends Component
{
    public $tahun, $bulan, $nama_nominasi, $pegawai_id, $penilai1, $penilai2, $penilai3, $penilai4, $penilai5, $absensi, $ckp, $kjk, $is_final;
    public $search;

    protected $updatesQueryString = ['search'];

    public function render()
    {
        $penilai1s = Pegawai::where('jabatan_id', '1')->where('status', 1)->get();
        $penilai2s = Pegawai::where('jabatan_id', '2')->where('status', 1)->get();
        $penilai3s = Pegawai::where('jabatan_id', '2')->where('status', 1)->get();
        $penilai4s = Pegawai::where('jabatan_id', '2')->where('status', 1)->get();
        $penilai5s = Pegawai::where('jabatan_id', '2')->where('status', 1)->get();

        $pen = DB::table('penilais')
            ->join('pegawais as n', 'penilais.pegawai_id', '=', 'n.id')
            ->join('pegawais as p', 'penilais.penilai1', '=', 'p.id')
            ->join('pegawais as o', 'penilais.penilai2', '=', 'o.id')
            ->join('pegawais as m', 'penilais.penilai3', '=', 'm.id')
            ->join('pegawais as q', 'penilais.penilai4', '=', 'q.id')
            // ->join('pegawais as r', 'penilais.penilai5', '=', 'r.id')
            ->where('tahun', $this->tahun)
            ->where('bulan', $this->bulan)

            ->select('penilais.id', 'n.nip_lama as nip', 'n.nama as nama', 'p.nama as penilai1', 'o.nama as penilai2', 'm.nama as penilai3', 'q.nama as penilai4', 'penilais.ckp', 'penilais.absensi', 'penilais.kjk', 'penilais.bulan', 'penilais.is_final')
            ->get();
        // dd($pen);

        $penilais = Penilai::get();
        return view('livewire.penilai-index', compact('penilais', 'penilai1s', 'penilai2s', 'penilai3s', 'penilai4s', 'penilai5s', 'pen'));
    }

    private function resetInputFields()
    {
        $this->nama_nominasi = '';
        $this->nip_lama = '';
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $pegawai = Pegawai::get();
        $penilai = Penilai::where('id', $id)->first();
        $this->penilai_id = $id;
        $this->nama_nominasi = $penilai->pegawai->nama;
        $this->penilai1 = $penilai->penilai1;
        $this->penilai2 = $penilai->penilai2;
        $this->penilai3 = $penilai->penilai3;
        // $this->penilai4 = $penilai->penilai4;
        // $this->penilai5 = $penilai->penilai5;
        $this->absensi = $penilai->absensi;
        $this->ckp = $penilai->ckp;
        $this->kjk = $penilai->kjk;
        $this->pegawai_id = $penilai->pegawai_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function penilai()
    {
        if ($this->penilai_id) {
            $penilai = Penilai::find($this->penilai_id);
            $penilai->update([
                'penilai1' => $this->penilai1,
                'penilai2' => $this->penilai2,
                'penilai3' => $this->penilai3,
                // 'penilai4' => $this->penilai4,
                // 'penilai5' => $this->penilai5,
                'ckp' => $this->ckp,
                'absensi' => $this->absensi,
                'kjk' => $this->kjk,

                'updated_at' => now(),
            ]);
        }
    }

    public function final()
    {
        if ($this->penilai_id) {
            $penilai = Penilai::find($this->penilai_id);
            $penilai->update([
                'is_final' => '1',
                'updated_at' => now(),
            ]);
            $tahun2 = Penilai::where('id', '=', $this->penilai_id)->value('tahun');
            $bulan2 = Penilai::where('id', '=', $this->penilai_id)->value('bulan');
            $ckp2 = Penilai::where('id', '=', $this->penilai_id)->value('ckp');
            $absensi2 = Penilai::where('id', '=', $this->penilai_id)->value('absensi');
            $kjk2 = Penilai::where('id', '=', $this->penilai_id)->value('kjk');

            //insert penilai 1
            Nilai2::create([
                'bulan' => $bulan2,
                'tahun' => $tahun2,
                'pegawai_id' => $this->pegawai_id,
                'penilai_id' => $penilai->penilai1,
                'ckp' => $ckp2,
                'absensi' => $absensi2,
                'kjk' => $kjk2,
                '20ckp' => ($ckp2 * 0.2),
                '20absensi' => ($absensi2 * 0.2),
                '20kjk' => ($absensi2 * 0.2),
            ]);
            // //insert penilai 2
            Nilai2::create([
                'bulan' => $bulan2,
                'tahun' => $tahun2,
                'pegawai_id' => $this->pegawai_id,
                'penilai_id' => $penilai->penilai2,
                'ckp' => $ckp2,
                'absensi' => $absensi2,
                'kjk' => $kjk2,
                '20ckp' => $ckp2 * 0.2,
                '20absensi' => $absensi2 * 0.2,
                '20kjk' => $kjk2 * 0.2,
            ]);
            //insert penilai 3,            
            Nilai2::create([
                'bulan' => $bulan2,
                'tahun' => $tahun2,
                'pegawai_id' => $this->pegawai_id,
                'penilai_id' => $penilai->penilai3,
                'ckp' => $ckp2,
                'absensi' => $absensi2,
                'kjk' => $kjk2,
                '20ckp' => $ckp2 * 0.2,
                '20absensi' => $absensi2 * 0.2,
                '20kjk' => $kjk2 * 0.2,
            ]);
            //insert penilai 4,            
            // Nilai2::create([
            //     'bulan' => $bulan2,
            //     'tahun' => $tahun2,
            //     'pegawai_id' => $this->pegawai_id,
            //     'penilai_id' => $penilai->penilai4,
            //     'ckp' => $ckp2,
            //     'absensi' => $absensi2,
            //     'kjk' => $kjk2,
            //     '20ckp' => $ckp2 * 0.2,
            //     '20absensi' => $absensi2 * 0.2,
            //     '20kjk' => $kjk2 * 0.2,
            // ]);
            //insert penilai 5,            
            // Nilai2::create([
            //     'bulan' => $bulan2,
            //     'tahun' => $tahun2,
            //     'pegawai_id' => $this->pegawai_id,
            //     'penilai_id' => $penilai->penilai5,
            //     'ckp'   => $ckp2,
            //     'absensi'   => $absensi2,
            //     'kjk'   => $kjk2,
            //     '20ckp'   => $ckp2*0.2,
            //     '20absensi'   => $absensi2*0.2,
            //     '20kjk'   => $kjk2*0.2,
            // ]);

            $this->updateMode = false;
            session()->flash('message', 'Penilai Finalized Successfully.');
            $this->resetInputFields();
        }
    }
}