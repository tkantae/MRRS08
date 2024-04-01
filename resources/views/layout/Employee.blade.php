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
            <a href="javascript:void(0)">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              My drive
            </a>
            <a href="javascript:void(0)">
              <i class="fa fa-laptop" aria-hidden="true"></i>
              Computers
            </a>
            <a href="javascript:void(0)">
              <i class="fa fa-clone" aria-hidden="true"></i>
              Shared with me
            </a>
            <a href="javascript:void(0)">
              <i class="fa fa-star-o" aria-hidden="true"></i>
              Starred
            </a>
            <a href="javascript:void(0)">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              Trash
            </a>
          </aside>

          <div class="social">
            <a href="https://www.linkedin.com/in/florin-cornea-b5118057/" target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
          </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
