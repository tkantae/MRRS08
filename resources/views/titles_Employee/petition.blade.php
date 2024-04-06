@extends('layout.Employee')

@section('title', 'คำร้องขอ')
@section('content')
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css.approvelist/approvelist.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <div class="flex-container">
        <div>
            <span class="title">คำขอการจอง</span><br>
            <span class="number" style="font-size:40px;font-weight: bold; color:rgb(18, 18, 124)">5</span>
            <span>รายการ</span>
        </div>
        <div>
            <span class="title">คำขอยกเลิก</span><br>
            <span class="number" style="font-size:40px;font-weight: bold; color:rgb(18, 18, 124)">4</span>
            <span>รายการ</span>
        </div>
    </div>
    <br><br>
    <div class="head">
        <button id="prev" onclick="changeDataApprove()">คำขอการจอง</button>
        <button id="next" onclick="changeDataReject()">คำขอยกเลิก</button>
        <input type="search" placeholder="search" style=";position: relative; left:48%;">
    </div>
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
        </thead>
        <tbody>
            <script>
                function changeDataApprove() {
                    const table = document.querySelector('table');
                    const rows = table.querySelectorAll('tr');

                    for (let i = 1; i < rows.length; i++) {
                        const cells = rows[i].querySelectorAll('td');
                        const name = cells[0].textContent;
                    }
                }

                function changeDataReject() {
                    const table = document.querySelector('table');
                    const rows = table.querySelectorAll('tr');

                    for (let i = 1; i < rows.length; i++) {
                        const cells = rows[i].querySelectorAll('td');
                        const gender = cells[2].textContent;
                    }
                }
            </script>
            @foreach ($reservation as $reservations)
                <tr>
                    <td>{{ $reservations->res_id }}</td>
                    <td>{{ $reservations->res_startdate }}</td>
                    <td>{{ $reservations->res_ }}</td>
                    <td>{{ $reservations->ro_id }}</td>
                    <td>{{ $reservations->res_typeroom }}</td>
                    <td> <a href=""><i class="fas fa-check-circle fa-lg" style="color: #63E6BE;"></i></a>
                        <a href=""><i class="fas fa-times-circle fa-lg" style="color: #ff1a1a;"></i></a>
                    </td>
                    <td>
                        <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
                    </td>
                </tr>
            @endforeach
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
                    <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
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
    </table>
    <div class="card-footer clearfix text-center">
        <ul class="pagination pagination-sm m-0">
            {!! $reservations->links('pagination::bootstrap-4') !!}
        </ul>
    </div>

    <div id="popup" class="hidden">
        <table style="width:100%;">
            <tr>
                <th colspan="2"
                    style="background-color: #3b81f2; color: white; text-align: center;border-top-left-radius: 15px;border-top-right-radius: 15px;">
                    รายละเอียดการจอง</th>
            </tr>
            <tr>
                <td style="text-align: center">รายละเอียดการจอง</td>
            </tr>
            <tr>
            </tr>
        </table>
        <button type="button" id="close-popup">ปิด Popup</button>
    </div>

    <script>
        const openPopupBtn = document.getElementById("detail");
        const popup = document.getElementById("popup");
        const closePopupBtn = document.getElementById("close-popup");

        openPopupBtn.addEventListener("click", () => {
            popup.classList.add("show");
        });

        closePopupBtn.addEventListener("click", () => {
            popup.classList.remove("show");
        });
    </script>
@endsection
