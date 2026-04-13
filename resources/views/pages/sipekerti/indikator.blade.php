@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Indikator')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Indikator Penilaian </h3>
            </div>
            <div class="card-body">
            <div class="mb-3">
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Tambah Indikator
                  </a>
                  <div class="collapse mt-1" id="collapseExample">
                    <div class="card card-body">
                        <livewire:indikator-create>
                    </div>
                  </div>
                </div>
                <livewire:indikator-index>
            </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
</section>
@endsection