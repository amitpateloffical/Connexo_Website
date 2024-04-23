@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Service</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Industry</li>
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
                <h3 class="card-title">Add Industry Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-industry.index') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="title" class="form-control" placeholder="Name">
                     @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="summernote" name="desc"></textarea>
                     @if ($errors->has('desc'))
                    <span class="text-danger">{{ $errors->first('desc') }}</span>
                @endif
                    <!--<input type="text" name="desc" class="form-control" placeholder="Description">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="img" class="form-control" placeholder="Image">
                     @if ($errors->has('img'))
                    <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
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
