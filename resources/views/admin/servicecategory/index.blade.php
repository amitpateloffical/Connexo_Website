@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our Services</h3>
          <div class="text-right">
          <button class="pull-right btn-success btn"><a class="text-white" href="{{ route('ad-servicecategory.create') }}">ADD Service</a></button>
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Description</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($service as $temp )
              <tr>
                <td>{{ $temp->id }}</td>
                <td>{{ $temp->name }}</td>
                <td>{!! $temp->description !!}</td>

                <td>
                     <form action="{{ route('ad-servicecategory.destroy', $temp->id) }}" method="POST" >
                                  <a href="{{route('ad-servicecategory.edit', $temp->id)}}" class="bg-info"> <i class="fa fa-edit text-white"></i></a>
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
