<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\RekapsExport;
use Maatwebsite\Excel\Facades\Excel;

class RekapsExportComponent extends Component
{
    public $tahun;
    public $bulan;

    public function export()
    {
        return Excel::download(new RekapsExport($this->tahun, $this->bulan), 'Rekapitulasi Akhir.xlsx');
    }

    public function render()
    {
        return view('livewire.rekaps-export-component');
    }
}
