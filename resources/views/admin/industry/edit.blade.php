@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Solution</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Solution</li>
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
                <h3 class="card-title">Edit Solution Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-industry.update', $industry->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="title" id="title" class="form-control"  value="{{ $industry->title }}"  placeholder="Name">
                     @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="summernote" name="desc">{{ $industry->desc }}</textarea>
                     @if ($errors->has('desc'))
                    <span class="text-danger">{{ $errors->first('desc') }}</span>
                @endif
                    <!--<input type="text" name="desc" id="desc" class="form-control"  value="{{ $industry->desc }}"  placeholder="Description">-->
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="img" id="img" class="form-control"  value="{{ $industry->img }}"  placeholder="Image">
                     @if ($errors->has('img'))
                    <span class="text-danger">{{ $errors->first('img') }}</span>
                @endif
                  </div>
                  <br>
                  <img src="{{asset('uploads/image/'.$industry->img )}}" id="imgprv">
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
