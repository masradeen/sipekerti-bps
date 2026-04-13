@extends('layouts.stuba')
@section('title','Sentuhan Untuk Boalemo')
@section('page','Indikator')
@section('breadcrumb','STUBA')

@section('content')
<section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Video Interpretasi</h3>
            </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Tambah Video
                  </a>
                  <div class="collapse mt-1" id="collapseExample">
                    <div class="card card-body">
                        <livewire:video-create>
                    </div>
                  </div>
                </div>
                <livewire:video-index>
              </div>
              <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
</section>
@endsection