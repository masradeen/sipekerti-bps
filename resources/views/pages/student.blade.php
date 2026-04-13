@extends('layouts.apps')
@section('title','Student List')
@section('breadcrumb','Main')

@section('content')
<section class="content">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>
            </div>
       
            <div class="card-body">
                <livewire:student-create>  
                <livewire:student-index>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
</section>
@endsection