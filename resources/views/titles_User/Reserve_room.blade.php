@extends('layout.User')

@section('title', 'จองห้องประชุม')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <script src="https://kit.fontawesome.com/e71f46c45f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('assets/dist/css/reservation.css') }}">
    @section('status')
    <i class="fas fa-calendar-days circle-icon-active"></i> 
    <i class="fas fa-file circle-icon-inactive"></i>
    <i class="fas fa-pencil circle-icon-inactive"></i>
    <i class="fas fa-check circle-icon-inactive"></i>
    @show
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <!-- Your main content goes here -->
</div>
<!-- /.content -->

@endsection
