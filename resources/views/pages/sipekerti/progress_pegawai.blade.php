@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Rekapitulasi Tahap 1')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
  <!-- Default box -->
  @if(Auth::user()->role >= 4)
  @else
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Progress Pengisian Nominasi Pegawai Berkinerja Terbaik</h3>
    </div>
    <div class="card-body">
      <livewire:progress-pegawai>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">Footer</div> -->
    <!-- /.card-footer-->

  </div>
  @endif
</section>
@endsection