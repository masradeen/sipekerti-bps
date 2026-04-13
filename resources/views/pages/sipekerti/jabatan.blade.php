@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Jabatan')
@section('breadcrumb','Jabatan')

@section('content')
<section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Jabatan</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <a class="btn btn-secondary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Tambah Jabatan
                  </a>
                  <div class="collapse mt-1" id="collapseExample">
                    <div class="card card-body">
                        <livewire:jabatan-create>
                    </div>
                  </div>
                </div>
                <livewire:jabatan-index>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
</section>
@endsection