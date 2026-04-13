<?php

namespace App\Imports;

use App\Models\Presensi;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithUpserts;


HeadingRowFormatter::default('none');

class FirstSheetImport implements SkipsUnknownSheets
{
    public function onUnknownSheet($Kamus)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$Kamus} was skipped");
    }
}


class PresensiImport implements ToModel, WithStartRow, WithUpserts
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    use Importable;

    public $satker_id;
    public $user_id;
    public $tahun;
    public $bulan;




    public function __construct($tahun, $bulan, $satker_id, $user_id)
    {
        $this->bulan = $bulan;
        $this->tahun = $tahun;
        $this->satker_id = $satker_id;
        $this->user_id = $user_id;
    }

    public function model(array $row)
    {
        // var_dump($row[1]);

        Log::info('Processing row: ' . json_encode($row));

        if (!isset($row[0]) || !isset($row[1]) || !isset($row[2])) {
            Log::warning('Missing data in row: ' . json_encode($row));
            return null;
        }


        return new Presensi([
            'nip' => $row[0],
            // 'nama' => $row[1],
            'hk' => $row[2],
            'hd'     => $row[3],
            'tk'     => $row[4],
            'tl'     => $row[5],
            'tb'     => $row[6],
            'pd'     => $row[7],
            'dk'     => $row[8],
            'kn'     => $row[9],
            'psw'     => $row[10],
            'psw1'     => $row[11],
            'psw2'     => $row[12],
            'psw3'     => $row[13],
            'psw4'     => $row[14],
            'ht'     => $row[15],
            'tl1'     => $row[16],
            'tl2'     => $row[17],
            'tl3'     => $row[18],
            'tl4'     => $row[19],
            'cb'     => $row[20],
            'cl'     => $row[21],
            'cm'     => $row[22],
            'cp'     => $row[23],
            'cs'     => $row[24],
            'ct10'     => $row[25],
            'ct11'     => $row[26],
            'ct12'     => $row[27],
            'cst1'     => $row[28],
            'cst2'     => $row[29],
            'kjk_ht'     => $row[34],
            'kjk_pc'     => $row[35],
            'kjk'     => $row[36],
            'tahun'    => $this->tahun,
            'bulan'    => $this->bulan,
            'satker_id'    => $this->satker_id,

        ]);
    }

    public function uniqueBy()
    {
        return ['nip', 'tahun', 'bulan']; // Composite unique key
    }

    public function startRow(): int
    {
        return 8;
    }
}
