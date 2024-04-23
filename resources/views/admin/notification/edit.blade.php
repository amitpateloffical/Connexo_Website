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
                <h3 class="card-title">Edit Regulatory Compliance Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-notification.update', $notification->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="ntitle" id="ntitle" class="form-control"  value="{{ $notification->ntitle }}"  placeholder="Name">
                     @if ($errors->has('ntitle'))
                    <span class="text-danger">{{ $errors->first('ntitle') }}</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                   <textarea id="summernote" name="note">{{ $notification->note }}</textarea>"  
                    @if ($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Upload PDF</label>
                    <input type="file" name="date" id="nimage" class="form-control"  value="{{ $notification->date }}"  placeholder="Date">
                     @if ($errors->has('date'))
                    <span class="text-danger">This feild is required !</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="nimage" id="nimage" class="form-control"  value="{{ $notification->nimage }}"  placeholder="Image">
                     @if ($errors->has('nimage'))
                    <span class="text-danger">{{ $errors->first('nimage') }}</span>
                @endif
                  </div>
                  <br>
                  <img src="{{asset('uploads/image/'.$notification->nimage )}}" id="imgprv">
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
