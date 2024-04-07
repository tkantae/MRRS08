<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <!-- boootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <Style>
        h1{
            font-family: 'Inter';
            font-style: italic;
            font-weight: 900;
            font-size: 80px !important;
            color: #718BED;
            border: 1px solid #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .image-container{
            width: 300px;
            height: 400px;
        }
        .input-group{
            border: 1px solid #000000;
        }
        .input-group-text{
            background: #718BED;
            border: 1px solid #000000;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px 0px 0px 10px;
        }
        .fas{
            color: #FFFFFF;
        }
        #btn-login{
            background: rgba(68, 109, 255, 0.616246);
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
        }
        #left{
            background: linear-gradient(180deg, #5070E8 0%, rgba(80, 112, 232, 0.636) 57.4%, #97CCF2 100%);
        }
    </Style>
</head>
<body class="hold-transition login-page">
    <!--div class="column" id="left">
        <div class="image-container">
            <img src="{{ url('assets\dist\img\LOGOMRRS.png') }}" alt="LOGOMRRS">
        </div>
    </div-->
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h1><b>Welcome</b></h1>
        </div>
        <div class="card-body">
        <form action="{{ url('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary" id ="btn-login">Log In</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
