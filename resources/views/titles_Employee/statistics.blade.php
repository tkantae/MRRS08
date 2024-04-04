@extends('layout.Employee')

@section('title', 'สถิติการจอง')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <style>
        .card{
            background-color: rgb(255, 255, 255);
            width: 1520px ;
            margin: 75px 75px 75px 25px;
            /*margin: auto ;*/
            border: black solid 5px ;/*ทำไว้ดูเสร็จแล้วให้ลบทิ้ง*/
            border-radius: 25px;
        }
        .info{
            height: 753px;
            margin: 25px;
           /*margin: auto ;*/
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 10px;
        }
        .pop-room{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 1fr;
            gap: 10px;
        }
        .less-pop-room{
            display: grid;
            grid-template: repeat(2, 1fr);
            gap: 10px;
        }
        .item{
            background-color: #fffbcfdc;
        }
    </style>
@section('content')
    <div class="card">
        <!-- content in card -->
        <div class="info">
            <!-- popular room -->
            <div class="pop-room">
                <div class="item">
                    first
                </div>
                <div class="less-pop-room">
                    <div class="item">
                        second
                    </div>
                    <div class="item">
                        third
                    </div>
                </div>
            </div>
            <!-- /.popular room -->

            <div class="item">Income</div>

            <!-- reserved graph -->
            <div class="item">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Reservation</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <!-- d-flex -->
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$18,230.00</span>
                        <span>Reservations Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                            <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                    </p>
                </div>
                <!-- /.d-flex -->
                <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas> graph here
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                        <i class="fas fa-square text-green"></i> Approve
                    </span>
                    <span>
                        <i class="fas fa-square text-red"></i> Reject
                    </span>
                </div>
            </div>
            <!-- /.reserved graph -->

            <!-- pine chart -->
            <div class="item">
                <div class="card-header border-0">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Donut Chart
                    </h3>
                </div>
                <div class="card-body">
                    <div id="donut-chart" style="height: 300px;"></div>
                </div>
            </div>
            <!-- /.pine chart -->
        </div>
        <!-- /.content in card -->
    </div>
@endsection
