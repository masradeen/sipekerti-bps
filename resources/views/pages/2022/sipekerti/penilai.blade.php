@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Daftar Penilai')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
          <!-- Default box -->
          @if(Auth::user()->role != 1)
          @else
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Penilai Pegawai Berkinerja Terbaik</h3>
              </div>
              <div class="card-body">
                <livewire:penilai-index>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">Footer</div> -->
              <!-- /.card-footer-->
              
            </div>
          @endif
</section>
@endsection