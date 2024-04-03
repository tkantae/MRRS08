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
        <div class="container-fluid flex ">
            <div class="row  flex ">
                <div class="col-md-12 ">
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
                                            <td>{{ $User->us_fname }}</td>
                                            <td>{{ $User->us_tel }}</td>
                                            <td>{{ $User->us_startdate}}</td>



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
                            <input type="button" href="#" class="menu-open-button" name="menu-open-button"
                                id="menu-open-button" />
                            <label class="menu-open-button" for="menu-open-button" onclick="openPopup()"> + </label>
                        </div>
                        <div id="myPopup" class="popup">
                            <div class="popup-content">
                                <span class="close" onclick="closePopup()">&times;</span>
                                <div class="left-column">
                                    <label for="first_name">First Name:</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name">
                                    <br>
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" placeholder="Email Name">
                                    <br>
                                    <label for="username">Username:</label>
                                    <input type="text" id="username" name="username" placeholder="Username">
                                    <br>

                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" placeholder="xxxxx">
                                    <br>

                                    <br>
                                </div>


                                <div class="right-column">
                                    <label for="last_name">Last Name:</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                                    <br>
                                    <label for="mobile">Mobile No.:</label>
                                    <input type="text" id="mobile" name="mobile" placeholder="Mobile No.">
                                    <br>
                                    <label for="position">ตำแหน่ง:</label>
                                    <select id="position" name="position">
                                        <option value="position1">ตำแหน่งที่ 1</option>
                                        <option value="position2">ตำแหน่งที่ 2</option>
                                        <option value="position3">ตำแหน่งที่ 3</option>
                                    </select>
                                    <br>
                                    <label for="confirm_password">Confirm Password:</label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        placeholder="Confirm Password">
                                    <br>

                                    <br>
                                </div>
                                <div><button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-default float-right">Reset</button>
                                </div>
                            </div>

                        </div>
                        <script>
                            function openPopup() {
                                document.getElementById("myPopup").style.display = "block";
                            }

                            function closePopup() {
                                document.getElementById("myPopup").style.display = "none";
                            }

                            function submitForm() {
                                alert("ข้อมูลถูกส่งเรียบร้อยแล้ว!");
                            }
                        </script>
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
