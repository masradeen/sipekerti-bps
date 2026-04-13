<?php

namespace App\Http\Livewire;

use App\Models\Pegawai;
use App\Models\EmployeeCkps;
use Livewire\Component;
use Carbon\Carbon;

class EmployeeCkp extends Component
{
    public $employess;
    public $nilais = [];
    public $comments = [];
    public $tahun;
    public $bulan;


    public function mount()
    {
        $this->employess = Pegawai::where('status', 1)->orderBy('nama')->get();

        // foreach ($this->employess as $employee) {
        //     $this->nilais[$employee->nip_lama] = 100;
        // }
    }

    protected $rules = [
        'nilais.*' => 'required',
        'comments.*' => 'nullable|string|max:255',
        'tahun' => 'required',
        'bulan' => 'required',
    ];

    public function updated($propertyName)
    {
        if ($propertyName === 'tahun' || $propertyName === 'bulan') {
            // Ambil nilai CKP terbaru dari database berdasarkan tahun dan bulan yang dipilih
            foreach ($this->employess as $employee) {
                $existingRecord = EmployeeCkps::where('pegawai_id', $employee->nip_lama)
                    ->where('tahun', $this->tahun)
                    ->where('bulan', $this->bulan)
                    ->first();

                // Jika ada data, gunakan nilai dari database
                $this->nilais[$employee->nip_lama] = $existingRecord->ckp ?? null;
                $this->comments[$employee->nip_lama] = $existingRecord->comments ?? null;
            }
        }
    }

    public function submit()
    {
        $this->validate();

        foreach ($this->nilais as $employee_id => $nilai) {
            EmployeeCkps::updateOrCreate(
                [
                    'pegawai_id' => $employee_id,
                    'tahun' => $this->tahun,
                    'bulan' => $this->bulan,
                ],
                [
                    'ckp' => $nilai,
                    'comments' => $this->comments[$employee_id] ?? null,
                ]
            );
        }

        session()->flash('message', 'Performance assessment submitted successfully.');

        // Reset form fields
        $this->reset(['nilais', 'comments', 'tahun', 'bulan']);

        // foreach ($this->employess as $employee) {
        //     $this->nilais[$employee->nip_lama] = 100;
        // }

        // Ambil kembali nilai CKP dari database agar tidak direset ke 100
        foreach ($this->employess as $employee) {
            $existingRecord = EmployeeCkps::where('pegawai_id', $employee->nip_lama)
                ->where('tahun', $this->tahun)
                ->where('bulan', $this->bulan)
                ->first();

            // Jika ada nilai sebelumnya, gunakan nilai tersebut; jika tidak, tetap 100
            $this->nilais[$employee->nip_lama] = $existingRecord->ckp ?? 100;
            $this->comments[$employee->nip_lama] = $existingRecord->comments ?? null;
        }
    }

    public function render()
    {
        return view('livewire.employee-ckp');
    }
}
