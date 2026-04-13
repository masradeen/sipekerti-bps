<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Nilai1s;
use App\Models\Pegawai;
use App\Models\Nilai1;
use App\Models\Seleksi;
use Auth;

use Livewire\Component;

class Tahap1Index extends Component
{
    public $tahun;
    public $bulan;
    public $nip_lama;
    public $pegawai_id;
    public $nama_pegawai;
    public $nilai1;
    public $nilai2;
    public $nilai3;
    public $nilai4;
    public $nilai5;
    public $nilai6;
    public $nilai7;
    public $search;

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
        $seleksis = Seleksi::get();
        $nominasis = Nilai1::get();
        $user_idx = Auth::user()->id;

        // if ($this->search != null) {
        $nominasis = Nilai1::where('tahun', $this->tahun)->where('bulan', $this->bulan)->where('insert_by', $user_idx)->get();
        // }

        return view('livewire.tahap1-index', compact('nominasis', 'seleksis'));
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $nominasis = Nilai1::where('id', $id)->first();
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
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nilai1' => 'required',
            'nilai2' => 'required',
            'nilai3' => 'required',
            'nilai4' => 'required',
            'nilai5' => 'required',
            'nilai6' => 'required',
            'nilai7' => 'required',
        ]);

        $total = collect([$this->nilai1, $this->nilai2, $this->nilai3, $this->nilai4, $this->nilai5, $this->nilai6, $this->nilai7])->sum();
        // dd($total);
        if ($total == 0) {
            return redirect()->back();
        }

        if ($this->nilai_id) {
            $nilai = Nilai1::find($this->nilai_id);
            $total = collect([$this->nilai1, $this->nilai2, $this->nilai3, $this->nilai4, $this->nilai5, $this->nilai6, $this->nilai7])->sum();
            // $total = (int($this->nilai1)+int($this->nilai2)+int($this->nilai3)+int($this->nilai4)+int($this->nilai5)+int($this->nilai6)+int($this->nilai7));
            // dd($total);
            $nilai->update([
                // 'bulan' => $this->bulan,
                // 'pegawai_id' => $this->pegawai_id,
                'nilai1' => $this->nilai1,
                'nilai2' => $this->nilai2,
                'nilai3' => $this->nilai3,
                'nilai4' => $this->nilai4,
                'nilai5' => $this->nilai5,
                'nilai6' => $this->nilai6,
                'nilai7' => $this->nilai7,
                'total' => $total,
                'updated_at' => now(),
            ]);
            // dd($nilai);      


            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function usul()
    {

        if ($this->nilai_id) {

            $total = Nilai1::find($this->nilai_id)->value('total');
            // dd($total);
            // if ($total == 0) {
            //     return redirect()->back();
            // }

            $nilai = Nilai1::find($this->nilai_id);
            $nilai->update([
                'is_final' => '1',
                'updated_at' => now(),
            ]);

            $this->updateMode = false;
            session()->flash('message', 'Pegawai Berhasil Diusulkan.');
            $this->resetInputFields();
        }
    }

    public function delete($id)
    {
        if ($id) {
            Nilai1::where('id', $id)->delete();
            return view('livewire.tahap1-index');
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}
