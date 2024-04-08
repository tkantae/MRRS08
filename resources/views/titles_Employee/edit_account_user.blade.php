@extends('layout.Employee')

@section('title', 'User Account Management')

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dist/css/edit_account.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main content -->
    <section class="content flex">
        <br>
        <div class="card" id="editcard">
            <div class="card-header" id="card-header1">
                <h3 class="card-title">แก้ไขบัญชีผู้ใช้</h3>
                <a href = "{{('/Manage_account')}}" >
                    <button  class="fas fa fa-times fa-lg" id="exit-icon"   ></button>
                </a>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

                {{-- form กรอกข้อมูล --}}
                <form action="{{ route('titles_Employee.update_user', ['user' => $user]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-box" id="formbox1">

                            <div class="form-group">
                                <label for="first_name">First Name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        value=" {{ $user->us_fname }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value=" {{ $user->us_email }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="username" name="username"
                                        value=" {{ $user->us_name }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-box" id="formbox2">
                            <div class="form-group">
                                <label for="position">Last name:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        value="{{ $user->us_lname }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile No.:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        value=" {{ $user->us_tel }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="editbutt">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="position">ตำแหน่ง:</label>
                                <select class="form-control" id="position" name="position">
                                    <option value="{{ $user->roles }}" disabled selected>Old position Is
                                        {{ $user->roles }}
                                    </option>
                                    <option value="E">E</option>
                                    <option value="M">M</option>
                                    <option value="A">A</option>
                                </select>
                            </div>


                        </div>
                    </div>



                </form>
                <div class="button-group" id="button">
                    <button type="submit" class="btn btn-info">ยืนยัน</button>
                </div>


            </div>
        </div>
    </section>
@endsection
