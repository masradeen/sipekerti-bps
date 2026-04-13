@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Entri CKP Bulanan')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
  <!-- Default box -->
  @if(Auth::user()->role >= 3)
  @else
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Entri Pegawai CKP</h3>
    </div>
    <div class="card-body">
      <livewire:employee-ckp>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">Footer</div> -->
    <!-- /.card-footer-->

  </div>
  @endif
</section>
@endsection