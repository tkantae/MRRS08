@extends('layout.Employee')

@section('title', 'จัดการบัญชี')
@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">

    <!-- Main content -->
    <section class="content flex">
        <div class="container-fluid float-right flex ">
            <div class="row  flex ">
                <div class="col-md-12 flex ">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">จัดการบัญชีผู้ใช้</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered fix">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ลำดับ</th>
                                        <th>ชื่อผู้ใช้</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>เบอร์โทร</th>
                                        <th>เริ่มงาน</th>
                                        <th>แก้ไข</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--fill loop add data from data base -->
                                    <!--add 5 pagination   -->



                                    @foreach ($users as $User)
                                        <tr>
                                            <td>{{ $User->us_id }}</td>
                                            <td>{{ $User->us_name }}</td>
                                            <td>{{ $User->us_fname, ' ', $User->us_lname }}</td>
                                            <td>{{ $User->us_tel }}</td>
                                            <td>{{ $User->startdate }}</td>
                                            <td>
                                                <a href="{{ url('/edit-user/' . $User->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form id="delete-form-{{ $User->id }}" method="post"
                                                    action="{{ url('/delete-user/' . $User->id) }}"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="deleteUser('{{ $User->id }}')">Delete</button>
                                                </form>
                                            </td>

                                            <script>
                                                function deleteUser(userId) {
                                                    Swal.fire({
                                                        title: "Are you sure?",
                                                        text: "You won't be able to revert this!",
                                                        icon: "warning",
                                                        showCancelButton: true,
                                                        confirmButtonColor: "#3085d6",
                                                        cancelButtonColor: "#d33",
                                                        confirmButtonText: "Yes, delete it!"
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            Swal.fire({
                                                                title: "Deleted!",
                                                                text: "Your file has been deleted.",
                                                                icon: "success"

                                                            });

                                                            document.getElementById('delete-form-' + userId).submit();
                                                        }
                                                    });
                                                }
                                            </script>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>


                        <div>
                            <a href="{{ url('/add-user') }}" class="menu-open-button"> + </a>
                        </div>

                        <br>
                        <br>
                        <br>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix text-center">
                            <ul class="pagination pagination-sm m-0"style="display: inline-block;"> 
                                {!!$users->links('pagination::bootstrap-4')!!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->


                    <script>
                        function deleteUser() {
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You won't be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Yes, delete it!"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    Swal.fire({
                                        title: "Deleted!",
                                        text: "Your file has been deleted.",
                                        icon: "success"

                                    });

                                    document.getElementById('delete-form').submit();
                                }
                            });
                        }
                    </script>

                    </tbody>


                    </table>
                @endsection
