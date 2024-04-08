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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
        <input type="search" placeholder="search">
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
                            {{-- @if ($reservations->res_status == 'A') --}}
                    <tr>
                        <td>{{ $reservations->id}}</td>
                        <td>{{ $reservations->res_serialcode }}</td>
                        <td>{{ $reservations->res_startdate }}</td>
                        <td>{{ $reservations->reserver_id }}</td>
                        <td>{{ $reservations->res_typeroom }}</td>
                        <td>
                            <form class="btn btn-cancel"
                                action="{{ route('reservation_list_Cancel', ['id' => $reservations->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" name="CancelStatus" value="C">ยกลิก</button>
                            </form>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Open modal
                              </button>
                            {{-- <a><i class="fas fa-info-circle fa-lg" onclick="cancel()" style="color: #242424"></i></a> --}}
                        </td>
                    </tr>
                    {{-- @endif --}}
                    @endforeach
                    </tr>
                </tbody>
            </table>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="modal-header1">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" >รายละเอียด</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                Modal body..
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
            </div>
        </div>

        </div>


        {{-- <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cancelModalLabel">ยืนยันการยกเลิกการจอง</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        คุณแน่ใจหรือไม่ว่าต้องการยกเลิกการจองนี้?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-cancel" data-id="{{ $reservations->id }}" style="background-color: #dc3545; color: white">ยกเลิก</button>
                        <form id="cancelForm" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">ยืนยัน</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <script>
            $(document).ready(function() {
                $('.btn-cancel').click(function() {
                    var reservationId = $(this).data('id');
                    $('#cancelForm').attr('action', '/cancel-reservation/' + reservationId);
                    $('#cancelModal').modal('show'); // แสดง Modal เมื่อคลิกปุ่ม "ยกเลิก"
                });
            });
        </script> --}}


    </center>
{{--
    <div class="card-footer clearfix text-center" style="max-width: 1230px;">
        <ul class="pagination pagination-sm m-0">
            {!! $reservations->links('pagination::bootstrap-5') !!}
        </ul>
    </div> --}}

    <div id="popup" class="hidden">

        <div class="modal-content">

            <table style="width:100%;">
                <tr>
                    <th colspan="2" style="background-color: #3b81f2; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px; font-size:15px; ">
                        <a style="float: left;">รายละเอียดการจอง</a>
                        <i class="fas fa fa-times fa-lg" id="close-popup" style="float: right; color: #ffffff"></i>
                    </th>
                </tr>
            </table>
            <div class = "box-conten">

            </div >
            <table>

                    {{-- <h2>รายละเอียดผู้จอง</h2>
                    <table>

                        @foreach ($reservations as $id => $popupReservations)
                        @if ($popupReservations->res_id == $id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $popupReservations->res_serialcode }}</td>
                                <td>{{ $popupReservations->res_startdate }}</td>
                                <td>{{ $popupReservations->reserver_id }}</td>
                                <td>{{ $popupReservations->res_typeroom }}</td>
                            </tr>
                        @endif
                    @endforeach --}}




                    {{-- </table> --}}


                    {{-- @foreach ($reservations as $res_id => $reservations)
                    @if ($reservation->res_serialcode == $res_serialcode)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reservation->res_serialcode }}</td>
                            <td>{{ $reservation->res_startdate }}</td>
                            <td>{{ $reservation->reserver_id }}</td>
                            <td>{{ $reservation->res_typeroom }}</td>
                        </tr>
                    @endif
                @endforeach --}}

            </table>
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
    {{-- <script>
        function cancel(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"

                    });

                    document.getElementById('delete-form-' + userId).submit();
                }
            });
        }
    </script> --}}

@endsection
