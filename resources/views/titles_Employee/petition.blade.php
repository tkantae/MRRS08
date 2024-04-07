@extends('layout.Employee')

@section('title', 'คำร้องขอ')
@section('content')
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
            <input type="search" placeholder="search" style="margin-left: 500px;">
        </div>
        <script>
            function changeDataApprove() {
            }

            function changeDataReject() {
            }
        </script>

        @if ($test01)
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
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->res_id }}</td>
                            <td>{{ $reservation->res_startdate }}</td>
                            <td>{{ $reservation->res_ }}</td>
                            <td>{{ $reservation->ro_id }}</td>
                            <td>{{ $reservation->res_typeroom }}</td>
                            <td> <a href=""><i class="fas fa-check-circle fa-lg" style="color: #63E6BE;"></i></a>
                                <a href=""><i class="fas fa-times-circle fa-lg" style="color: #ff1a1a;"></i></a>
                            </td>
                            <td>
                                <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

        <div class="card-footer clearfix text-center" style="width: 1060px;">
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
