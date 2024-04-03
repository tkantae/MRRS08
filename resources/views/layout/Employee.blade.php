<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>

        <link rel="stylesheet" href="{{ url('assets/dist/css/sidbar.css') }}">


        @section('sidebar')
        <aside>
            <p href="Homepage"> Menu </p>
            <a href="Employee" class="sidebar-link ">
              <i class="fa fa-user-o" aria-hidden="true"></i>
              หน้าหลัก
            </a>
            <a href="Reserve" class="sidebar-link ">
              <i class="fa fa-laptop " aria-hidden="true"></i>
              จองห้อง
            </a>
            <a href="Petition" class="sidebar-link ">
              <i class="fa fa-clone " aria-hidden="true"></i>
              คำร้องขอ
            </a>
            <a href="Reservation_list" class="sidebar-link ">
              <i class="fa fa-star-o " aria-hidden="true"></i>
              รายการจองห้อง
            </a>
            <a href="Statistics" class="sidebar-link ">
              <i class="fa fa-trash-o " aria-hidden="true"></i>
              สถิติการจอง
            </a>
            <a href="Manage_account" class="sidebar-link ">
              <i class="fa fa-trash-o " aria-hidden="true"></i>
              จัดการบัญชี
            </a>
            <a href="Manage_rooms" class="sidebar-link ">
              <i class="fa fa-trash-o " aria-hidden="true"></i>
              จัดการห้องประชุม
            </a>

            <a href="Accout" id="Accout">
                <i class="fa fa-trash-o " aria-hidden="true"></i>
                Accout
            </a>
            <p id="line"></p>
            <a href="Homepage" id="Logout">
                <i class="fa fa-trash-o " aria-hidden="true"></i>
                Logout
             </a>
          </aside>

          <script>
            const activeLinks = document.querySelectorAll('.sidebar-link ,[href*="' + window.location.pathname + '"]');

            // วนลูปผ่าน element ทั้งหมด
            for (const activeLink of activeLinks) {
                if (activeLink.href.includes(window.location.pathname)) {
                    // ลบ element ออกจาก sidebar
                    activeLink.classList.add('active');

                }else{
                    activeLink.classList.remove('active');
                }
            }

          </script>

        @show

        <div class="container ">
            @yield('content')
        </div>
    </body>
</html>
