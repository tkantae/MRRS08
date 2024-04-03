@extends('layout.Status')

@section('title', 'จองห้องประชุม')

@section('reserv')
<!-- Content Header (Page header) -->
<link rel="stylesheet" href="{{ url('assets/dist/css/calender.css') }}">
<div class="calender">
    <div class="row">
        <div class="text">
            <span>วันที่เข้าใช้ห้อง :</span>
            <span>วันที่สิ้นสุด :</span>
        </div>

    </div>
    <div class="row">
        <div class="boxSelect">
            <div class="textSelect">
            <i class="fas fa-calendar-days"></i>
            <span class="textSelect">
                <body>
                วว/ดด/ปปปป
                </body>
            </span>
            </div>
        </div>
        <div class="boxSelect">
        <div class="textSelect">
            <i class="fas fa-calendar-days"></i>
            <span class="textSelect">
                <body>
                วว/ดด/ปปปป
                </body>
            </span>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="text">
            <span>ขนาดห้อง :</span>
        </div>
    </div>
    <div class="row" >
        <div class="boxSelect" style="width: 210px;">
            <span class="textSelect" >
                <body>
                    ขนาดห้อง
                    <i class="fa fa-angle-down" style="margin-left: 72px"></i>
                </body>
            </span>
        </div>
        <div class="submit-button">
            <div class="textSubmit">
            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff; font-size: 30px;"></i>
            <span >ค้นหาห้อง</span>
            </div>
        </div>
    </div>

    </div>
</div>


<!-- /.content-header -->

<!-- Main content -->
<div class="content">
   
</div>
<!-- /.content -->

@endsection
