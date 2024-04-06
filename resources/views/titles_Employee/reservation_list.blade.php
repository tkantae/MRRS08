@extends('layout.Employee')

@section('title', 'รายการจอง')
@section('content')
    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css.approvelist/approved.css') }}">

    <br><br>
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
            {{-- @foreach ($data as $reservations) --}}
                {{-- <tr> --}}
                    {{-- <td>{{ $reservations->res_id }}</td>
                    <td>{{ $reservations->res_startdate }}</td>
                    <td>{{ $reservations->res_ }}</td>
                    <td>{{ $reservations->res_ }}</td>
                    <td> --}}
                        {{-- <a href="{{ url('/edit-user/'.$user->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Add delete functionality -->
                        <form method="post" action="{{ url('/delete-user/'.$user->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="delete()">Delete</button>
                        </form> --}}
                    {{-- </td>
                </tr> --}}
            {{-- @endforeach --}}
            <tr>
                <td>1</td>
                <td>1หหห</td>
                <td>18/01/66</td>
                <td>ห้องประชุม 101</td>
                <td>กลาง(เต็มห้อง)</td>
                <td>
                    <button class="btn btn-cancel" onclick="showPopupcancel()"  style="background-color: #dc3545; color: white">ยกเลิก</button>
                    <a><i class="fas fa-info-circle fa-lg" id="detail" style="color: #242424"></i></a>
                </td>
            <tr>
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
            <tr>
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
            <tr>
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

    <div style="border-top-left-radius:15px;border-top-right-radius:15px;"id="popup" class="hidden">
        <table style="width:100%;">
            <tr>
                <th colspan="2" style="background-color: #3b81f2; color: white; border-top-left-radius: 15px;border-top-right-radius: 15px;font-size:15px; ">
                    <a style="float: left;">รายละเอียดการจอง</a>
                    <i class="fas fa fa-times fa-lg" id="close-popup" style="float: right; color: #ffffff"></i>
                </th>
            </tr>
        </table>
         <div style="position: center;border: 1px solid black; width: 90%; height: 80%;"></div>
            <div class="scrollable-content">

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
    </script>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <section class="intro">
        <div class="rwd-table">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">วันที่</th>
                                    <th scope="col">ชื่อผู้จอง</th>
                                    <th scope="col">ชื่อห้อง</th>
                                    <th scope="col">ขนาดห้อง</th>
                                    <th scope="col">รอดำเนิน</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>18/01/66</td>
                                    <td>08:00 น. - 12:00 น.</td>
                                    <td>ห้องประชุม 101</td>
                                    <td>กลาง(เต็มห้อง)</td>
                                    <td>
                                        <a href="/"><i class="fas fa-check-circle fa-lg"
                                                style="color: #63E6BE;"></i></a>
                                        <a href="/"><i class="fas fa-times-circle fa-lg"
                                                style="color: #ff1a1a;"></i></a>
                                    <td>
                                        <a href="/"><i class="fas fa-info-circle fa-lg"
                                                style="color: #242424"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

</center>
@endsection
