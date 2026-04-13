<?php

namespace App\Http\Livewire;
// namespace App\Http\Livewire\Nilai1s;
// namespace App\Http\Livewire\Tahap1Index;
// use App\Http\Livewire\Nilai1s;
// use App\Http\Livewire\Tahap1Index;
use App\Models\Pegawai;
use App\Models\Nilai1;
use App\Models\Nilai2;
use App\Models\Indikator;
use App\Models\Seleksi;
use DB;
use Auth;


use Livewire\Component;

class Tahap2Index extends Component
{
    public $tahun, $bulan, $search;
    // public $pegawai_id;
    public $pegawai_id, $nama_pegawai;
    public $nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8, $nilai9, $nilai10;
    public $nilai11, $nilai12, $nilai13, $nilai14, $nilai15, $nilai16, $nilai17, $nilai18, $nilai19, $nilai20;
    public $nilai21, $nilai22, $nilai23, $nilai24, $nilai25, $nilai26, $nilai27, $nilai28, $nilai29, $nilai30;
    public $nilai31, $nilai32, $nilai33, $nilai34, $nilai35, $total;
    public $nip_lama;



    protected $listeners = [
        'tahap1Added',
    ];

    public function tahap1Added()
    {
        # code...
    }

    protected $updatesQueryString = ['search'];

    public function render()
    {
        $penilai_idx = $user_idx = Auth::user()->pegawai_id;
        $seleksis = Indikator::get();
        // dd($user_id);
        $fins = DB::table('nilai2s')
            ->join('pegawais as r', 'nilai2s.pegawai_id', '=', 'r.id')
            ->join('pegawais as s', 'nilai2s.penilai_id', '=', 's.id')
            ->where('nilai2s.tahun', $this->tahun)
            ->where('nilai2s.bulan', $this->bulan)
            ->where('nilai2s.penilai_id', $penilai_idx)
            ->select('nilai2s.*', 'r.nama as nama_pegawai', 's.nama as nama_penilai')
            ->get();


        $finals = Nilai2::get();
        return view('livewire.tahap2-index', compact('finals', 'seleksis', 'fins'));
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $nominasis = Nilai2::where('id', $id)->first();



        $this->nilai1 = $nominasis->nilai1;
        $this->nilai2 = $nominasis->nilai2;
        $this->nilai3 = $nominasis->nilai3;
        $this->nilai4 = $nominasis->nilai4;
        $this->nilai5 = $nominasis->nilai5;
        $this->nilai6 = $nominasis->nilai6;
        $this->nilai7 = $nominasis->nilai7;
        $this->nilai8 = $nominasis->nilai8;
        $this->nilai9 = $nominasis->nilai9;
        $this->nilai10 = $nominasis->nilai10;
        $this->nilai11 = $nominasis->nilai11;
        $this->nilai12 = $nominasis->nilai12;
        $this->nilai13 = $nominasis->nilai13;
        $this->nilai14 = $nominasis->nilai14;
        $this->nilai15 = $nominasis->nilai15;
        $this->nilai16 = $nominasis->nilai16;
        $this->nilai17 = $nominasis->nilai17;
        $this->nilai18 = $nominasis->nilai18;
        $this->nilai19 = $nominasis->nilai19;
        $this->nilai20 = $nominasis->nilai20;
        $this->nilai21 = $nominasis->nilai21;
        $this->nilai22 = $nominasis->nilai22;
        $this->nilai23 = $nominasis->nilai23;
        $this->nilai24 = $nominasis->nilai24;
        $this->nilai25 = $nominasis->nilai25;
        $this->nilai26 = $nominasis->nilai26;
        $this->nilai27 = $nominasis->nilai27;
        $this->nilai28 = $nominasis->nilai28;
        $this->nilai29 = $nominasis->nilai29;
        $this->nilai30 = $nominasis->nilai30;
        $this->nilai31 = $nominasis->nilai31;
        $this->nilai32 = $nominasis->nilai32;
        $this->nilai33 = $nominasis->nilai33;
        $this->nilai34 = $nominasis->nilai34;
        $this->nilai35 = $nominasis->nilai35;
        $this->nilai_id = $id;
        $this->tahun = $nominasis->tahun;
        $this->bulan = $nominasis->bulan;
        $this->pegawai_id = $nominasis->id;
        $this->nama_pegawai = $nominasis->pegawai->nama;
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
        $this->nilai8 = '';
        $this->nilai9 = '';
        $this->nilai10 = '';
        $this->nilai11 = '';
        $this->nilai12 = '';
        $this->nilai13 = '';
        $this->nilai14 = '';
        $this->nilai15 = '';
        $this->nilai16 = '';
        $this->nilai17 = '';
        $this->nilai18 = '';
        $this->nilai19 = '';
        $this->nilai20 = '';
        $this->nilai21 = '';
        $this->nilai22 = '';
        $this->nilai23 = '';
        $this->nilai24 = '';
        $this->nilai25 = '';
        $this->nilai26 = '';
        $this->nilai27 = '';
        $this->nilai28 = '';
        $this->nilai29 = '';
        $this->nilai30 = '';
        $this->nilai31 = '';
        $this->nilai32 = '';
        $this->nilai33 = '';
        $this->nilai34 = '';
        $this->nilai35 = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        // $validatedDate = $this->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);

        if ($this->nilai_id) {
            $nilai = Nilai2::find($this->nilai_id);
            $bplayan = collect([$this->nilai2 + $this->nilai4 + $this->nilai1 + $this->nilai5 + $this->nilai19 + $this->nilai3 + $this->nilai19])->sum();
            $akuntabel = collect([$this->nilai26 + $this->nilai28 + $this->nilai27 + $this->nilai29 + $this->nilai30])->sum();
            $kompeten = collect([$this->nilai6 + $this->nilai7 + $this->nilai18 + $this->nilai19 + $this->nilai8 + $this->nilai9 + $this->nilai10 + $this->nilai18])->sum();
            $harmonis = collect([$this->nilai1 + $this->nilai11 + $this->nilai12 + $this->nilai16 + $this->nilai18 + $this->nilai15 + $this->nilai21 + $this->nilai22 + $this->nilai23 + $this->nilai25 + $this->nilai35])->sum();
            $loyal = collect([$this->nilai26 + $this->nilai27 + $this->nilai30 + $this->nilai31 + $this->nilai32 + $this->nilai34 + $this->nilai18 + $this->nilai29])->sum();
            $adaptif = collect([$this->nilai19 + $this->nilai22 + $this->nilai23 + $this->nilai34 + $this->nilai24 + $this->nilai25 + $this->nilai4 + $this->nilai21 + $this->nilai33 + $this->nilai35])->sum();
            $kolaboratif = collect([$this->nilai1 + $this->nilai4 + $this->nilai11 + $this->nilai12 + $this->nilai16 + $this->nilai13 + $this->nilai15 + $this->nilai12 + $this->nilai14])->sum();
            $total = $bplayan + $akuntabel + $kompeten + $harmonis + $loyal + $adaptif + $kolaboratif;
            $total40 = 0.4 * $total;


            $nilai->update([
                'nilai1' => $this->nilai1, 'nilai2' => $this->nilai2, 'nilai3' => $this->nilai3, 'nilai4' => $this->nilai4, 'nilai5' => $this->nilai5, 'nilai6' => $this->nilai6,
                'nilai7' => $this->nilai7, 'nilai8' => $this->nilai8, 'nilai9' => $this->nilai9, 'nilai10' => $this->nilai10, 'nilai11' => $this->nilai11, 'nilai12' => $this->nilai12, 'nilai13' => $this->nilai13, 'nilai14' => $this->nilai14, 'nilai15' => $this->nilai15, 'nilai16' => $this->nilai16, 'nilai17' => $this->nilai17, 'nilai18' => $this->nilai18, 'nilai19' => $this->nilai19, 'nilai20' => $this->nilai20, 'nilai21' => $this->nilai21, 'nilai22' => $this->nilai22, 'nilai23' => $this->nilai23, 'nilai24' => $this->nilai24, 'nilai25' => $this->nilai25, 'nilai26' => $this->nilai26, 'nilai27' => $this->nilai27, 'nilai28' => $this->nilai28, 'nilai29' => $this->nilai29, 'nilai30' => $this->nilai30, 'nilai31' => $this->nilai31, 'nilai32' => $this->nilai32, 'nilai33' => $this->nilai33, 'nilai34' => $this->nilai34, 'nilai35' => $this->nilai35,
                'bplayan' => $bplayan,
                'akuntabel' => $akuntabel,
                'kompeten' => $kompeten,
                'harmonis' => $harmonis,
                'loyal' => $loyal,
                'adaptif' => $adaptif,
                'kolaboratif' => $kolaboratif,
                'total' => $total,
                '40total' => $total40,
                'updated_at' => now(),
            ]);
            // dd($nilai);

            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function final()
    {

        if ($this->nilai_id) {
            $nilai = Nilai2::find($this->nilai_id);
            $nilai->update([
                'is_final' => '1',
                'updated_at' => now(),
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Nilai Pegawai Berhasil Difinalkan.');
            $this->resetInputFields();
        }
    }
}
