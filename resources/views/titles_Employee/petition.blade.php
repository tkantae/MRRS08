@extends('layout.Employee')

@section('title', 'คำร้องขอ')
@section('content')
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css.approvelist/approvelist.css') }}">
    <div class="flex-container">
        <div>
            <span class="title">คำขอการจอง</span><br>
            <span class="number" style="font-size:40px;font-weight: bold;">5</span>
            <span>รายการ</span>
        </div>
        <div>
            <span class="title">คำขอยกเลิก</span><br>
            <span class="number" style="font-size:40px;font-weight: bold;">4</span>
            <span>รายการ</span>
        </div>
    </div>
    <br><br>
    <div class="head">
        <button id="prev">คำขอการจอง</button>
        <button id="next">คำขอยกเลิก</button>
        <input type="search" placeholder="search" style=";position: relative; left:49%;">
    </div>
    <table class="rwd-table">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>วันที่เข้าใช้</th>
                <th>เวลา</th>
                <th>ชื่อห้อง</th>
                <th>ขนาดห้อง</th>
                <th>รอดำเนินการ</th>
                <th></th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>18/01/66</td>
                <td>08:00 น. - 12:00 น.</td>
                <td>ห้องประชุม 101</td>
                <td>กลาง(เต็มห้อง)</td>
                <td>
                    <a href="/"><i class="fas fa-check-circle fa-lg" style="color: #63E6BE;"></i></a>
                    <a href="/"><i class="fas fa-times-circle fa-lg" style="color: #ff1a1a;"></i></a>
                <td>
                    <a href="/"><i class="fas fa-info-circle fa-lg" style="color: #242424"></i></a>
                </td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    เปลี่ยนหน้าdfsd
                </td>
            </tr>
        </tfoot>
    </table>
@endsection
