<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>

        <link rel="stylesheet" href="{{ url('assets/dist/css/sidbar.css') }}">


        @section('sidebar')
        <aside>
            <p> Menu </p>
            <a href="Employee">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              หน้าหลัก
            </a>
            <a href="Reserve">
              <i class="fa fa-laptop" aria-hidden="true"></i>
              จองห้อง
            </a>
            <a href="Petition">
              <i class="fa fa-clone" aria-hidden="true"></i>
              คำร้องขอ
            </a>
            <a href="Reservation_list">
              <i class="fa fa-star-o" aria-hidden="true"></i>
              รายการจองห้อง
            </a>
            <a href="Statistics">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              สถิติการจอง
            </a>
            <a href="Manage_account">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              จัดการบัญชี
            </a>
            <a href="Manage_rooms">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
              จัดการห้องประชุม
            </a>
          </aside>

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
