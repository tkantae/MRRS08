@extends('layout.Employee')

@section('title', 'คำร้องขอ')
<!-- Font Awesome Icons -->
{{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"> --}}
@section('content')
    <style>
        body {
            background: #fff;
            font-family: 'Open Sans', sans-serif;
        }

        table {
            background: #f1f1f1;
            border-radius: 10px;
            border-collapse: collapse;
        }

        th {
            background-color: #3b81f2;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 0.5em 1em;
            text-align: center;
            width: 130px;
        }

        td {
            border-bottom: 1px solid #d9dddf;
            color: black;
            padding: 10px;
            text-align: center;
            height: 35px;
        }

        .flex-container>div {
            background-color: #f1f1f1;
            width: 200px;
            margin: 3px;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
        }

        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            background-color: #fff;
            border: 1px solid #fff;
            margin: 10px;
        }

        input {
            width: 200px;
            height: 40px;
            border-radius: 10px;
            border: solid 1px #242424;
            padding: 15px;
            font-size: 18px;
            background-color: #fff;

        }


        /* a {
            display: flex;
            width: 120px;
            height: 50;
            border-radius: 20px;
            background-color: #3b81f2;
        } */
    </style>
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
    <div class="button">
        <a href="">คำขอการจอง</a>
        <a href="">คำขอยกเลิก</a>
        <input type="text" style=";position: relative; left:68%">
    </div>
        <br>
    <table class="table" >
        <thead>
            <tr>
                <th>ลำดับ
                <th>วันที่เข้าใช้
                <th>เวลา
                <th>ชื่อห้อง
                <th>ขนาดห้อง
                <th>รอดำเนินการ
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
                    <div class="btn btn-primary btn-sm" href="/">Approve</div>
                <td>Yes
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
                <thead>

                </thead>
        </tbody>
    </table>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}

    {{-- <style>
        body {
            font-family: Arial, sans-serif;
        }

        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            margin: 10px;
        }

        .flex-container>div {
            background-color: white;
            width: 200px;
            margin: 20px;
            text-align: center;
            line-height: 80px;
            font-size: 20px;
        }

        .table {
            width: 95%;
            border-collapse: collapse;
        }

        .table>thead>tr>th {
            background-color: #3b81f2;
            color: white;
            text-align: center;
        }

        .table>tbody {
            text-align: center;
        }
    </style>

    <body>
        <div class="flex-container">
            <div>
                <span class="title">คำขอการจอง:</span>
                <span class="number">5</span>
            </div>
            <div>
                <span class="title">คำขอยกเลิก:</span>
                <span class="number">4</span>
            </div>
        </div>
        <div class="contrainer my-5">
            <div class="btn btn-primary btn-sm" href="/" style="width:120px; height:50; border-radius: 20px;">
                คำขอการจอง
            </div>
            <div class="btn btn-primary btn-sm" href="/" style="width:120px; height:50;border-radius: 20px;">
                คำขอยกเลิก</div>
            <input type="text" style="border-radius: 20px; position:absolute; right:80px; ">
            <table class="table">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>วันที่เข้าใช้</th>
                        <th>เวลา</th>
                        <th>ชื่อห้อง</th>
                        <th>ขนาดห้อง</th>
                        <th>รอดำเนินการ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="btn btn-primary btn-sm" href="/">Approve</div>
                            <div class="btn btn-danger btn-sm" href="/">Reject</div>
                        </td>
                        <td>
                            <div class="btn btn-danger btn-sm" href="/" style="border-radius: 40%">!</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body> --}}
@endsection
