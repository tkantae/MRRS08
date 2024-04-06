@extends('layout.Status')

@section('title', 'รายละเอียดห้องประชุม')

@section('reserv')
<!-- Content Header (Page header) -->


<!-- /.content-header -->

<!-- Main content -->
<div class="content">
<link rel="stylesheet" href="{{ url('assets/dist/css/info.css') }}">
<a href="" class="original-button">Button</a>





  <div class="card-image">
    <img src="https://i.pinimg.com/736x/b3/b5/b6/b3b5b62ae1e40eb4d21c1859284639cf.jpg" alt="Meeting Room Image"> <!---เหลือลิงค์กับdatabase--->
    </div>
    <div class="image2-card">
        <img src="https://i.pinimg.com/736x/b3/b5/b6/b3b5b62ae1e40eb4d21c1859284639cf.jpg" alt="Meeting Room Image2">
    </div>
    <div class="image3-card">
        <img src="https://i.pinimg.com/736x/b3/b5/b6/b3b5b62ae1e40eb4d21c1859284639cf.jpg" alt="Meeting Room Image3">
    </div>

    <div class="location-icon">
        <i class="fas fa-map-marker-alt"></i>
        <div class="text">
            <span>ตึกมังกรฟ้าชั้น 4 </span>
        </div>

    </div>

    <div class="seat-icon">
        <i class="fas fa-chair"></i>
        <div class="text">
            <span>ตึกมังกรฟ้าชั้น 4 </span>
        </div>

    </div>

    <div class="area-icon">
        <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
        <div class="text">
            <span>ตึกมังกรฟ้าชั้น 4 </span>
        </div>

    </div>

    <div class="accessories-icon">
        <i class="fa-solid fa-laptop"></i>
        <div class="text">
            <span>ตึกมังกรฟ้าชั้น 4 </span>
        </div>

    </div>

</div>















@endsection
