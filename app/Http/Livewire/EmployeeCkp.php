<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\EmployeeCkps;
use Livewire\Component;

class EmployeeCkp extends Component
{
    public $nilais = [];
    public $comments = [];
    public $tahun;
    public $bulan;

    protected $rules = [
        'nilais.*' => 'nullable|numeric|min:0|max:100',
        'comments.*' => 'nullable|string|max:255',
        'tahun' => 'required',
        'bulan' => 'required',
    ];

    public function mount()
    {
        $this->tahun = date('Y');
        $this->bulan = date('m');
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'tahun' || $propertyName === 'bulan') {
            $this->loadExistingData();
        }
    }

    public function loadExistingData()
    {
        if ($this->tahun && $this->bulan) {
            $pegawais = Pegawai::where('status', 1)->get();

            foreach ($pegawais as $emp) {
                $record = EmployeeCkps::where('pegawai_id', $emp->nip_lama)
                    ->where('tahun', $this->tahun)
                    ->where('bulan', $this->bulan)
                    ->first();

                // Gunakan prefix 'id_' untuk menghindari error titik pada NIP
                $key = 'id_' . str_replace(['.', ' '], '_', $emp->nip_lama);
                $this->nilais[$key] = $record->ckp ?? null;
                $this->comments[$key] = $record->comments ?? null;
            }
        }
    }

    public function submit()
    {
        $this->validate();

        foreach ($this->nilais as $key => $nilai) {
            // Kembalikan ID asli dengan membuang prefix 'id_'
            $originalNip = str_replace('id_', '', $key);

            if ($nilai !== null) {
                EmployeeCkps::updateOrCreate(
                    [
                        'pegawai_id' => $originalNip,
                        'tahun' => $this->tahun,
                        'bulan' => $this->bulan,
                    ],
                    [
                        'ckp' => $nilai,
                        'comments' => $this->comments[$key] ?? null,
                    ]
                );
            }
        }

        session()->flash('message', 'Data CKP Berhasil Disimpan.');
    }

    public function render()
    {
        return view('livewire.employee-ckp', [
            'employees_list' => Pegawai::where('status', 1)->orderBy('nama')->get()
        ]);
    }
}