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
              <li class="breadcrumb-item active">Service</li>
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
                <h3 class="card-title">Edit Services Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('ad-service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service category</label>
                       <select class="form-control" name="service_cat">
                        <option>SELECT</option>
                        @foreach($data as $temp)
                        <option value="{{ $temp->id }}" @if($service->service_cat == $temp->id) selected @endif >{{ $temp->name }}</option>
                        @endforeach
                       </select>
                        @if ($errors->has('service_cat'))
                    <span class="text-danger">{{ $errors->first('service_cat') }}</span>
                @endif
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" id="name" class="form-control"  value="{{ $service->name }}"  placeholder="Name">
                     @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputPassword1">Description</label>-->
                  <!--  <input type="text" name="dis" id="dis" class="form-control"  value="{{ $service->dis }}"  placeholder="Description">-->
                  <!--</div>-->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea id="summernote" name="dis" class="form-control"  value="{{ $service->dis }}"  placeholder="Description">{{ $service->dis }}</textarea>
                     @if ($errors->has('dis'))
                    <span class="text-danger">{{ $errors->first('dis') }}</span>
                @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="photo" id="photo" class="form-control"  value="{{ $service->photo }}"  placeholder="Image">
                     @if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif
                  </div>
                  <br>
                  <img src="{{asset('uploads/image/'.$service->photo )}}" id="imgprv">
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
