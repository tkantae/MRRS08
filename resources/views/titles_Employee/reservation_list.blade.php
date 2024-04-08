@extends('layout.Employee')

@section('title', 'รายการจอง')
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/css.approvelist/approvelist.css') }}">
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
    <Style>

    </Style>
@section('content')
    <center>
        <div class="flex-container">
            <div>
                <span class="title">คำขอการจอง</span><br>
                <span class="number" style="font-size:40px;font-weight: bold; color:rgb(18, 18, 124)">5</span>
                <span>รายการ</span>
            </div>
        </div>
        <input type="search" placeholder="search" >
        <div>
            <table class="rwd-table">
                <thead>
                    <tr>
                      <th scope="col">ลำดับ</th>
                      <th scope="col">วันที่เข้าใช้งาน</th>
                      <th scope="col">ชื่อผู้จอง</th>
                      <th scope="col">ชื่อห้อง</th>
                      <th scope="col">ขนาดห้อง</th>
                      <th scope="col">รอดำเนินการ</th>
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
                               <button class="btn btn-cancel" onclick="cancelReservation('{{ $reservations->res_id }}')" style="background-color: #dc3545; color: white">ยกเลิก</button>
                               <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
                           </td>
                        </tr>

                        @endif

                    @endforeach
                   </tr>
                </tbody>
            </table>
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
            // ส่งคำขอ HTTP เพื่อเปลี่ยนสถานะจาก A เป็น R
            fetch(`/cancel-reservation/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // สามารถเพิ่ม header อื่น ๆ ตามความต้องการ
                },
                // สามารถส่งข้อมูลเพิ่มเติมได้เช่น reservationId หรืออื่น ๆ
                body: JSON.stringify({ id: id })
            })
            .then(response => {
                if (response.ok) {
                    // เมื่อเปลี่ยนสถานะเรียบร้อย ซ่อนตาราง
                    document.getElementById("reservationTable").style.display = "none";
                } else {
                    // จัดการเมื่อมีข้อผิดพลาด เช่น ไม่สามารถเปลี่ยนสถานะได้
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
