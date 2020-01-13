@extends('partials.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><a href="{{route('student.create')}}" class="btn btn-primary"> + Add New Student</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>class</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Action</th>

                                </tr>
                                </thead>

                            <button class="btn btn-sm"></button>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                    <!-- /.card -->
                </div>
        </section>
    </div>
    <script id="datatableActionsTemplate" type="text/html">



        <a class="btn btn-info btn-icon btn-circle" href="jobcategory/{id}/edit">
            <i class="fa fa-edit"></i>
        </a>&nbsp;



        <a class="btn btn-danger btn-icon btn-circle" href="#" onClick="confirmDelete('delete_single','jobcategory/{id}','jobCategory')">
            <i class="fa fa-times"></i>
        </a>&nbsp;


    </script>

<script>
    var datatableActionsTemplate = $("#datatableActionsTemplate").html();
    $(function () {
        $('#example2').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{ url('/student/getdata') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'name', name: 'name' },
                { data: 'class_name', name: 'table_classes.class_name' },
                { data: 'ph_no', name: 'ph_no' },
                { data: 'address', name: 'address' }
            ],

            columnDefs:[{"targets":5}],

        });
    });

</script>
@stop
