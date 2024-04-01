<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>

        <link rel="stylesheet" href="{{ url('assets/dist/css/sidbar.css') }}">

        @section('sidebar')
        <aside>
            <p> Menu </p>
            <a href="titles">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              จองห้อง
            </a>
            <a href="follow">
              <i class="fa fa-laptop" aria-hidden="true"></i>
              ติดตามสถานะการจอง
            </a>


        </aside>

            @show
            <div class="container">
                @yield('content')
            </div>


    </body>
</html>
