<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class RekapsExport implements FromView
{
    protected $tahun = '';
    protected $bulan = '';

    public function __construct($tahun, $bulan)
    {
        $this->tahun = $tahun;
        $this->bulan = $bulan;
    }

    public function view(): View
    {

        return view('pages.sipekerti.exports.rekap', [
            'rekaps' => DB::table('vw_allpegawai')
                ->select('nama', 'tahun', 'tw', 'kjk', 'ckp', 'presensi', 'tahap1', 'tahap2', 'total')
                ->where('tahun', $this->tahun)
                ->where('tw', $this->bulan)
                ->get(),

            'tahun' => DB::table('vw_allpegawai')
                ->where('tahun', $this->tahun)
                ->where('tw', $this->bulan)
                ->value('tahun'),

            'bulan' => DB::table('vw_allpegawai')
                ->where('tahun', $this->tahun)
                ->where('tw', $this->bulan)
                ->value('tw'),
        ]);
    }
}
