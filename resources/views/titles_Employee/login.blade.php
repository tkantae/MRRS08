<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/dist/css/login.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <title>Login</title>
    <style>
        body{
            padding: 0px !important;
            display: flex ;

        }
        .column{
            flex: 1;
            padding-top: 212px;
            padding-bottom: 411px;
        }
        h1{
            font-family: 'Inter';
            font-style: italic;
            font-weight: 900;
            font-size: 80px !important;
            color: #718BED;
            border: 1px solid #FFFFFF;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);

        }
        .login-box-header{
            padding-left: 320px;
        }
        .login-box-content{
            padding-left: 200px;
            padding-right: 200px;
        }
        .image-container{
            border: #5070E8 solid 5px;
            padding-left: 100px;
            width: 310px;
            height: 705px;
        }
    </style>

</head>
    <body>
        <!-- left column-->
        <div class="column" style="background: linear-gradient(180deg, #5070E8 0%, rgba(80, 112, 232, 0.636) 57.4%, #97CCF2 100%);">
            <div class="image-container">
                <img src="{{ url('assets\dist\img\LOGOMRRS.png') }}" alt="LOGOMRRS">
            </div>
        </div>
        <!-- /.left column-->
        <!-- right column-->
        <div class="column">
            <div class="login-box-header">
                <h1>Welcome</h1>
            </div>
            <div class="login-box-content">
                <form action="{{ url('login') }}" class="space-y-4" method="POST">
                    @csrf
                    <div class="relative py-4">
                        <input type="text" name="username" id="username" class="w-full border-300 shadow-sm pl-50 py-1.5">
                        <label for="username" class="absolute left-1 top-4 pt-1 pl-3 text-gray-500">Username:</label>
                    </div>
                    <div class="relative py-4">
                        <input type="password" name="password" id="password" class="w-full border-300 shadow-sm pl-50 py-1.5 ">
                        <label for="password" class="absolute left-1 top-4 pt-1 pl-3 text-gray-500">Password:</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.right column-->
    </body>
</html>

