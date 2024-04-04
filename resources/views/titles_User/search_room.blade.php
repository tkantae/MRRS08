@extends('layout.Status')

@section('title', 'จองห้องประชุม')

@section('reserv')
<link rel="stylesheet" href="{{ url('assets/dist/css/searchroom.css') }}">
<div class="showroom">
    <div class="rowicon">
        <div class="boxSelect-Calender" id="calenderStart">
                <div class="textSelect">
                    <i class="fas fa-calendar-days"></i>
                    <span class="textSelect">
                        <body>
                        วว/ดด/ปปปป
                        </body>
                    </span>
                </div>

        </div>
        <div class="line-between-calender"></div>
        <div class="boxSelect-Calender" id="calenderEnd">
                <div class="textSelect">
                    <i class="fas fa-calendar-days"></i>
                    <span class="textSelect">
                        <body>
                        วว/ดด/ปปปป
                        </body>
                    </span>
                </div>
        </div>
        <div class="boxSelect-Size">
            <div class="textSelect">
                <span class="textSelect">
                    <body>
                        ขนาดห้อง
                        <i class="fa fa-angle-down" style="margin-left: 60px;"></i>
                    </body>
                </span>
            </div> 
        </div>      
        <div class="boxSearch" >
            <div class="textSelect" style="padding-left: 0px;">
                <span class="textSelect" style="color: #ffffff;">
                    <body>
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff; font-size: 20px;"></i>
                        ค้นหาห้อง
                    </body>
                </span>
            </div> 
        </div>      
    </div>
    <div class="row">
        <div class="boxRoom" id="box1">

            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
        <div class="boxRoom" id="box2">
            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
    </div>
    <div class="row">
        <div class="boxRoom" id="box1">
            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
        <div class="boxRoom" id="box2">
            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
    </div>
    <div class="row">
        <div class="boxRoom" id="box1">
            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
        <div class="boxRoom" id="box2">
            <span class="roominfo" id="statusRoom">
                <i class="fa-solid fa-earth-americas"></i>
            </span>
            <span class="roominfo">
                <i class="fa-sharp fa-solid fa-s"> ห้องขนาดเล็ก</i>
            </span>
            <span class="roominfo">
                <i class="fa-regular fa-money-bill-1"> ราคา 4000 บาท/วัน</i>
            </span>
            <span class="roominfo">
                <i class="fa-solid fa-laptop"> คอมพิวเตอร์ โปรเจคเตอร์</i>
            </span>
            <span class="roomname">
                IF-301
            </span>
        </div>
    </div>
</div>
@endsection
