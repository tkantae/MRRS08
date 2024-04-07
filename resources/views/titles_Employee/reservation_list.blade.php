@extends('layout.Employee')

@section('title', 'รายการจอง')
@section('content')
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css.approvelist/approved.css') }}">
    <div class="head">
        <button id="prev"  style=";position: relative; left:2.5%;">รายการจอง</button>
        <input type="search" placeholder="search" style=";position: relative; left:60%;">
    </div>
    <center>
    <table class="rwd-table" >

        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>รหัสการจอง</th>
                <th>วันที่เข้าใช้</th>
                <th>ชื่อห้อง</th>
                <th>ขนาดห้อง</th>
                <th></th>
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
                        <button class="btn btn-cancel" onclick="cancelReservation('{{ $reservations->res_id }}')" style="background-color: #dc3545; color: white">ยกเลิก</button>
                        <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>



                    </td>
                 </tr>

                 @endif

             @endforeach
            </tr>
        </tbody>
        <tfoot>
            <tr>
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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">รายละเอียดการจอง</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="popupContent">
                    <!-- ตำแหน่งสำหรับแสดงข้อมูลที่ได้จากการเรียก fetch -->
                </div>
            </div>
        </div>
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
        closePopupButton.addEventListener("click", () => {
            popup.classList.add("hidden");
        });

        function cancelReservation(id) {
            // ส่งคำขอ HTTP เพื่อเปลี่ยนสถานะจาก A เป็น C
            fetch(`/cancel-reservation/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: id })
            })
            .then(response => {
                if (response.ok) {
                    // เมื่อเปลี่ยนสถานะเรียบร้อย ประมวลผลข้อมูลที่ต้องแสดงในป็อบอัพ
                    fetch(`/reservation-details/${id}`)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById("popupContent").innerHTML = data;
                        // เปิดป็อบอัพ
                        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                            keyboard: false
                        });
                        myModal.show();
                    });
                } else {
                    console.error('Failed to cancel reservation');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

    </script>




</center>
@endsection
