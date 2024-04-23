@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our Solution category</h3>
          <div class="text-right">
          <button class="pull-right btn-success btn"><a class="text-white" href="{{ route('ad-solutioncategory.create') }}">ADD Service</a></button>
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Name</th>

                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($service as $temp )
              <tr>
                <td>{{ $temp->id }}</td>
                <td>{{ $temp->name }}</td>

                <td>
                     <form action="{{ route('ad-solutioncategory.destroy', $temp->id) }}" method="POST" >

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
