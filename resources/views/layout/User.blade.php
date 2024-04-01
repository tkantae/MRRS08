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
            <a href="User" class="sidebar-link">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                จองห้อง
            </a>
            <a href="follow" class="sidebar-link">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                ติดตามสถานะการจอง
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
            <div class="container">
                @yield('content')
            </div>


    </body>
</html>
