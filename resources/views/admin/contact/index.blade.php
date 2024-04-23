@extends('admin.main.layout')
@section('adcontent')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <br><br>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                          <div class="card-header">
                                <h3 class="card-title">Contact Us</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">

                                    <div class="row">
                                        <div class="col-12">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                         <th>Serial Number</th>
                                                        <th>Name</th>

                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Message</th>
                                                        <th width="280px">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;?>
                                                    @foreach ($list as $data)
                                                       <tr>
                                                        <td>{{ $i }}</td>
                                                                <td>{{ $data->name }}</td>
                                                                <td>{{ $data->number }}</td>
                                                                <td>{{ $data->email }}</td>
                                                                <td>{{ $data->message }}</td>
                                                                <td>
                                                                     <form action="{{ route('allcontact.destroy',$data->id) }}" method=post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>  
                                                                </td>
                                                            </tr>
                                                            <?php $i++;?>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
 
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
   @endsection
