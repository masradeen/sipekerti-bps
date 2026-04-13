@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Pengguna')
@section('breadcrumb','Pengguna')

@section('content')
<section class="content">
  <!-- Default box -->
  @if(Auth::user()->role >= 3)
  @else
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Pegawai</h3>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          Tambah Pengguna
        </a>
        <div class="collapse mt-1" id="collapseExample">
          <div class="card card-body">
            <livewire:user-create>
          </div>
        </div>
      </div>
      <livewire:user-index>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">Footer</div>
    <!-- /.card-footer-->
  </div>
  @endif
  <!-- /.card -->
</section>
@endsection