@extends('layout.Employee')

@section('title', 'จัดการบัญชี')
@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Simple Tables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-md-12">
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
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>jfaj;ak;fk; k;lk;ak;fk;</td>
                                        <td>0623780958</td>
                                        <td>2/4/2567</td>
                                        <td>
                                            <a href="/" class="btn btn-warning">Edit</a>
                                            <form id="delete-form" method="post" action="/"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteUser()">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>jfaj;ak;fk; k;lk;ak;fk;</td>
                                        <td>0623780958</td>
                                        <td>2/4/2567</td>
                                        <td>
                                            <a href="/" class="btn btn-warning">Edit</a>
                                            <form id="delete-form" method="post" action="/"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteUser()">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>jfaj;ak;fk; k;lk;ak;fk;</td>
                                        <td>0623780958</td>
                                        <td>2/4/2567</td>
                                        <td>
                                            <a href="/" class="btn btn-warning">Edit</a>
                                            <form id="delete-form" method="post" action="/"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteUser()">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>jfaj;ak;fk; k;lk;ak;fk;</td>
                                        <td>0623780958</td>
                                        <td>2/4/2567</td>
                                        <td>
                                            <a href="/" class="btn btn-warning">Edit</a>
                                            <form id="delete-form" method="post" action="/"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteUser()">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>
                        <div>
                            <input type="button" href="#" class="menu-open-button" name="menu-open-button"
                                id="menu-open-button" />
                            <label class="menu-open-button" for="menu-open-button" onclick="openPopup()"> + </label>
                        </div>
                        <br>
                        <br>
                        <br>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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
