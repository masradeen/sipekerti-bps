@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Penilaian Tahap 2')
@section('breadcrumb','Penilaian Tahap 2')

@section('content')
<section class="content">
          <!-- Default box -->
          @if(Auth::user()->role > 3)
          @else

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Nominasi Pegawai Berkinerja Terbaik</h3>
              </div>
              <div class="card-body">
                <livewire:tahap2-index>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">Footer</div> -->
              <!-- /.card-footer-->
              
            </div>
            <!-- /.card -->
          @endif
</section>
@endsection

