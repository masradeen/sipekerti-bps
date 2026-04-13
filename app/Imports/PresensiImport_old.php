<?php

namespace App\Imports;

use App\Models\Presensi;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\SkipsUnknownSheets;
use Illuminate\Support\Facades\Log;

HeadingRowFormatter::default('none');

class FirstSheetImport implements SkipsUnknownSheets
{
    public function onUnknownSheet($Kamus)
    {
        // E.g. you can log that a sheet was not found.
        info("Sheet {$Kamus} was skipped");
    }
}


class PresensiImport implements ToModel, WithStartRow
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

        if (empty($row) || count($row) == 0) {
            return back()->withError('No Fare Found For The City!');
        } else {
            return new Presensi([
                'nip' => $row[0],
                'nama' => $row[1],
                'hk' => $row[2],
                // 'hd'     => $row['HD'],
                // 'tk'     => $row['TK'],
                // 'tl'     => $row['TL'],
                // 'tb'     => $row['TB'],
                // 'pd'     => $row['PD'],
                // 'dk'     => $row['DK'],
                // 'kn'     => $row['KN'],
                // 'psw'     => $row['PSW'],
                // 'psw1'     => $row['PSW1'],
                // 'psw2'     => $row['PSW2'],
                // 'psw3'     => $row['PSW3'],
                // 'psw4'     => $row['PSW4'],
                // 'ht'     => $row['HT'],
                // 'tl1'     => $row['TL1'],
                // 'tl2'     => $row['TL2'],
                // 'tl3'     => $row['TL3'],
                // 'tl4'     => $row['TL4'],
                // 'cb'     => $row['CB'],
                // 'cl'     => $row['CL'],
                // 'cm'     => $row['CM'],
                // 'cp'     => $row['CP'],
                // 'cs'     => $row['CS'],
                // 'ct10'     => $row['CT 10'],
                // 'ct11'     => $row['CT 11'],
                // 'ct12'     => $row['CT 12'],
                // 'cst1'     => $row['CST1'],
                // 'cst2'     => $row['CST2'],
                // 'kjk_ht'     => $row['KJK HT'],
                // 'kjk_pc'     => $row['KJK PC'],
                // 'kjk'     => $row['KJK'],
                'tahun'    => $this->tahun,
                'bulan'    => $this->bulan,

            ]);
        }
    }

    public function startRow(): int
    {
        return 8;
    }
}
