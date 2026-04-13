@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Penilaian Tahap 1')
@section('breadcrumb','Penilaian Tahap 1')

@section('content')
<section class="content">
          <!-- Default box -->
            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">Penilaian Tahap 1 Pegawai Teladan</h3>
              </div> -->
              <div class="card-body">
                <div class="mb-3">
                  <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Tambah Nominasi Pegawai
                  </a>
                  <div class="collapse mt-1" id="collapseExample">
                    <div class="card card-body">
                        <livewire:tahap1-create>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">Footer</div> -->
              <!-- /.card-footer-->
              
            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Nominasi Pegawai Teladan</h3>
              </div>
              <div class="card-body">
                <livewire:tahap1-index>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">Footer</div> -->
              <!-- /.card-footer-->
              
            </div>
            <!-- /.card -->
          
</section>
@endsection

