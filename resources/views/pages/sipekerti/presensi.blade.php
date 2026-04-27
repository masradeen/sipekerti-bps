@extends('layouts.sipekerti')
@section('title', 'SIPEKERTI')
@section('page', 'Rekapitulasi Tahap 1')
@section('breadcrumb', 'SIPEKERTI')

@section('content')
    <section class="content">
        <!-- Default box -->
        @if (Auth::user()->role >= 3)
        @else
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Upload Rekap Presensi Pegawai Bulanan dari BackOffice</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (\Session::has('error'))
                            <div class="alert alert-warning">
                                <ul>
                                    <li>{!! \Session::get('error') !!}</li>
                                </ul>
                            </div>
                        @endif
                        <a class="btn btn-secondary" data-toggle="collapse" href="#collapseUpload" role="button"
                            aria-expanded="false" aria-controls="collapseUpload">
                            Upload Presensi
                        </a>
                        <div class="collapse mt-1" id="collapseUpload">
                            <form action="{{ route('import.presensi') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Tahun</label>
                                    <select class="form-control" name="tahun">
                                        <option value="">-- Pilih Tahun --</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Bulan</label>
                                    <select class="form-control" name="bulan">
                                        <option value="">-- Pilih Bulan --</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Satuan Kerja</label>
                                    <select class="form-control" name="satker_id">
                                        <option value="">-- Pilih--</option>
                                        <option value="1">BPS Provinsi Gorontalo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="file">Choose Excel File</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekap Presensi Pegawai Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <livewire:presensi-index>
                    </div>
                    <!-- /.card-body -->
                    <!-- <div class="card-footer">Footer</div> -->
                    <!-- /.card-footer-->

                </div>
        @endif
    </section>
@endsection