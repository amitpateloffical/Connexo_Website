@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Regulatory Compliance</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Regulatory Compliance</li>
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
                <h3 class="card-title">Add Regulatory Compliance Here</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-notification.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="ntitle" class="form-control" placeholder="Name">
                     @if ($errors->has('ntitle'))
                    <span class="text-danger">{{ $errors->first('ntitle') }}</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="summernote" name="note"></textarea>
                     @if ($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                    <!--<input type="text" name="note" class="form-control" placeholder="Description">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Uploade PDF</label>
                    <input type="File" name="date" class="form-control" placeholder="Date">
                    @if ($errors->has('date'))
                    <span class="text-danger">This feild is required</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="nimage" class="form-control" placeholder="Image">
                     @if ($errors->has('nimage'))
                    <span class="text-danger">{{ $errors->first('nimage') }}</span>
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
