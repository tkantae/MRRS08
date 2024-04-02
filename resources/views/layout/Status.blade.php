@extends('layout.User')

@section('title', 'accout')
@section('content')
            <!DOCTYPE html>
            <html>
            <head>
            <script src="https://kit.fontawesome.com/e71f46c45f.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="{{ url('assets/dist/css/reservation.css') }}">
            </head>
            <body>
            <div class="content-header">
                @section('status')
                <i class="fas fa-calendar-days circle-icon-active"></i>
                <i class="fas fa-file circle-icon-active"></i>
                <i class="fas fa-pencil circle-icon-inactive"></i>
                <i class="fas fa-check circle-icon-inactive"></i>
                @show
            </div>
            <div class="container">
                    @yield('reserv')
                </div>
            </body>
            </html>
@endsection

