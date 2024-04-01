<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>

        <link rel="stylesheet" href="{{ url('assets/dist/css/sidbar.css') }}">
        
        @section('sidebar')
            <header class="header" role="banner">
                <h1 class="logo">
                <a href="#">Terence <span>Devine</span></a>
                </h1>
                <div class="nav-wrap">
                <nav class="main-nav" role="navigation">
                    <ul class="unstyled list-hover-slide">
                    <li><a href="index">About</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                </div>
            </header>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
