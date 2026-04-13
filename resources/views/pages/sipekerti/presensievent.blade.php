@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Presensi Event')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
  <!-- Default box -->
  @if(Auth::user()->role >= 3)
  @else
  <div class="card ">
    <div class="card-header">
      <h3 class="card-title">Presensi Event</h3>
    </div>
    <div class="card-body h-100">
      <livewire:presensi-event>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">Footer</div> -->
    <!-- /.card-footer-->

  </div>
  @endif
</section>
@endsection