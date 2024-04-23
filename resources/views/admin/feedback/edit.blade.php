@extends('admin.main.layout')
@section('adcontent')
<?php
use Cohensive\Embed\Facades\Embed;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">feedback</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit feedbacks Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-feedback.update', $feedback->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Name</label>
                    <input type="text" name="cname" id="cname" class="form-control"  value="{{ $feedback->cname }}"  placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Video Link</label>
                    <input type="text" name="video" id="video" class="form-control"  value="{{ $feedback->video }}"  placeholder="Description">
                </div>
                <br>
                {!! Embed::make($feedback->video)->parseUrl()->setAttribute([
                    'width' => '100px',
                    'height' => '100px',
                    'frameborder' => 0,
                    'allowfullscreen' => true
                    ])->getHtml() !!}"
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="cimage" id="cimage" class="form-control"  value="{{ $feedback->cimage }}"  placeholder="Image">
                  </div>
                  <br>
                  <img src="{{asset('uploads/image/'.$feedback->cimage )}}" id="imgprv">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection
