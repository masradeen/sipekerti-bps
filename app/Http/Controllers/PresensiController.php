<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Imports\PresensiImport;
use Illuminate\Http\Request;
use App\Models\Presensi;
use Maatwebsite\Excel\Facades\Excel;

class PresensiController extends Controller
{
    public function import(Request $request)
    {
        // dd($request);

        // Validate the uploaded file
        $request->validate([
            'tahun' => 'required',
            'bulan' => 'required',
            'satker_id' => 'required',
            'file' => 'required|mimes:xlsx,xls',
        ]);
        $tahun = $request->tahun;
        $bulan = $request->bulan;

        $presensis = Presensi::where('tahun', $tahun)->where('bulan', $bulan)->first();
        // dd($presensis);
        if ($presensis != null) {
            return redirect()->back()->with('error', 'Data tahun ' . $tahun . ' bulan ' . $bulan . ' sudah ada, hapus dulu...');
        }

        // Get the uploaded file
        $file = $request->file('file');
        $tahun = $request->tahun;
        $bulan = $request->bulan;
        $satker_id = $request->satker_id;
        $user_id = Auth::user()->id;

        // Process the Excel file
        Excel::import(new PresensiImport($tahun, $bulan, $satker_id, $user_id), $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
