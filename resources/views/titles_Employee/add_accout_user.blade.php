@extends('layout.Employee')

@section('title', 'จัดการบัญชี')
@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">xxx     

    <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">
    <style>
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 80%;
        }
    </style>
    </head>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add User Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('store-user') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" id="us_fname" name="us_fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" id="us_lname" name="us_lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="us_email" name="us_email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile No.:</label>
                                        <input type="text" class="form-control" id="us_tel" name="us_tel" placeholder="Mobile No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="us_name" name="us_name" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position:</label>
                                        <select class="form-control" id="roles" name="roles">
                                            <option value="position1">Position 1</option>
                                            <option value="position2">Position 2</option>
                                            <option value="position3">Position 3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="us_password" name="us_password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password:</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-default float-right">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
