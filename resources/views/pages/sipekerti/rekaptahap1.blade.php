@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Rekap Penilaian Tahap 1')
@section('breadcrumb','Rekap Penilaian Tahap 1')

@section('content')
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Rekap Nominasi Pegawai Teladan Tahap 1</h3>
    </div>
    <div class="card-body">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <livewire:rekap-tahap1-index>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">Footer</div> -->
    <!-- /.card-footer-->

  </div>
  <!-- /.card -->

</section>
@endsection