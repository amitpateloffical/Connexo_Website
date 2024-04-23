@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our Regulatory Compliance</h3>
          <div class="text-right">
          <button class="pull-right btn-success btn"><a class="text-white" href="{{ route('ad-notification.create') }}">ADD Here</a></button>
          </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($notification as $temp )
              <tr>
                <td>{{ $temp->id }}</td>
                <td>{{ $temp->ntitle }}</td>
                <td>{!! $temp->note !!}</td>
                <td><img class="img-circle"style="height:40px; width:40px;" src="{{asset('uploads/image/'.$temp->nimage )}}" alt=""></td>
                <td>
                     <form action="{{ route('ad-notification.destroy', $temp->id) }}" method="POST" >
                        <a href="{{ route('ad-notification.edit', $temp->id) }}"> <i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none"> <i class="fa fa-trash text-danger"></i></button>
                            </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
  @endsection
