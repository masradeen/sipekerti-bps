@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Rekapitulasi Akhir')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
    <!-- Default box -->
    @if(Auth::user()->role >= 3)
    @else
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Rekapitulasi Akhir Penilaian Pegawai Berkinerja Terbaik 2024</h3>
        </div>
        <div class="card-body">
            <livewire:rekaps-export-component />
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">Footer</div> -->
        <!-- /.card-footer-->

    </div>
    @endif
</section>
@endsection