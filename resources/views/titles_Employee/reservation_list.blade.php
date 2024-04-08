@extends('layout.Employee')

@section('title', 'รายการจอง')
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/css.approved/approved.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url('//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css') }}">
    <!-- boootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

    <div class="head">
        <button id="prev"  style=";position: relative; left:0%;">รายการจอง</button>
        <input type="search" placeholder="search" style=";position: relative; left:50%;">


        <table class="rwd-table">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>วันที่เข้าใช้</th>
                    <th>ชื่อผู้จอง</th>
                    <th>ชื่อห้อง</th>
                    <th>ขนาดห้อง</th>
                    <th>รอดำเนินการ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($reservations as $res_id => $reservations)
                    @if ($reservations->res_status == "A")
                    <tr>
                        <td>{{ $res_id + 1 }}</td>
                        <td>{{ $reservations->res_serialcode }}</td>
                        <td>{{ $reservations->res_startdate }}</td>
                        <td>{{ $reservations->reserver_id }}</td>
                        <td>{{ $reservations->res_typeroom }}</td>
                        <td>
                            <td><button class="btn btn-cancel" onclick="showPopupcancel()"  style="background-color: #dc3545; color: white">ยกเลิก</button>
                            <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
                       </td>
                    </tr>

                    @endif

                @endforeach
               </tr>
            </tbody>
        </table>
    </div>
    </center>
    @endsection

