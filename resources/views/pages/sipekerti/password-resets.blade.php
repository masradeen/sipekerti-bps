@extends('layouts.sipekerti')
@section('title','SIPEKERTI')
@section('page','Reset Password')
@section('breadcrumb','SIPEKERTI')

@section('content')
<section class="content">
  <!-- Default box -->

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Reset Password</h3>
    </div>
    <div class="card-body">
      <livewire:reset-password>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">Footer</div> -->
    <!-- /.card-footer-->

  </div>

</section>
@endsection