@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({

                });
            });
        </script>

    </head>

    <body>
        <br>
        <div class="btn-container">
            <a href="{{ url('/Manage_rooms/add-rooms') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                Room</a>
        </div>
        <table id="example" class="display" style="width:140%">
            <thead>
                <tr>
                    <th style="width: 10%">No.</th>
                    <th>Name</th>
                    <th>size</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $rooms)
                    <tr>
                        <td>{{ $rooms->id }}</td>
                        <td>{{ $rooms->ro_name }}</td>
                        <td>
                            @if ($rooms->ro_size == 'S')
                                Small
                            @elseif($rooms->ro_size == 'M')
                                Medium
                            @else
                                Large
                            @endif
                        </td>
                        <td>
                            @if ($rooms->ro_avaliable == 1)
                                Available
                            @else
                                Unavailable
                            @endif
                        </td>

                        <td>
                            <a href="{{ url('/edit-room/' . $rooms->ro_id) }}" class="btn btn-warning"><i
                                    class="fas fa-edit"></i> Edit</a>
                            <form id="delete-form-{{ $rooms->ro_id }}" method="post"
                                action="{{ url('/delete-user/' . $rooms->ro_id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="deleteUser('{{ $rooms->ro_id }}')"><i
                                        class="fas fa-trash-alt"></i> Delete</button>
                            </form>
                            <!-- ปุ่ม i และโมดัล -->
                            <button class="btn btn-default btn-xs" onclick="openModal('{{ $rooms->id }}')">i</button>
                            <div id="myModal-{{ $rooms->id }}" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal('{{ $rooms->id }}')">&times;</span>
                                    <div>
                                        <div class="containerro_name">
                                            {{ $rooms->ro_name }}
                                        </div>
                                        <div class="row">
                                            {{ $rooms->ro_pic1 }}
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label>ro_description</label><br>
                                                <div>
                                                    {{ $rooms->ro_description }}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label>ro_size</label><br>
                                                @php
                                                    $sizeClass = '';

                                                    if ($rooms->ro_size == 'S') {
                                                        $sizeClass = 'Small';
                                                    } elseif ($rooms->ro_size == 'M') {
                                                        $sizeClass = 'Medium';
                                                    } else {
                                                        $sizeClass = 'Large';
                                                    }

                                                @endphp
                                                <span class="{{ $sizeClass }}">{{ $sizeClass }}</span><br>
                                                <br>
                                                <label>ro_avaliable</label><br>
                                                @php
                                                    $statusClass = '';
                                                    if ($rooms->ro_avaliable == 1) {
                                                        $statusClass = 'available';
                                                    } else {
                                                        $statusClass = 'unavailable';
                                                    }
                                                @endphp

                                                <span
                                                    class="{{ $statusClass }}">{{ $rooms->ro_avaliable == 1 ? 'Available' : 'Unavailable' }}</span>
                                                <br>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            </div>

                            <!-- สคริปต์ JavaScript -->
                            <script>
                                function openModal(roomId) {
                                    var modal = document.getElementById("myModal-" + roomId);
                                    modal.style.display = "block";
                                }

                                function closeModal(roomId) {
                                    var modal = document.getElementById("myModal-" + roomId);
                                    modal.style.display = "none";
                                }

                                window.onclick = function(event) {
                                    if (event.target.className == "modal") {
                                        event.target.style.display = "none";
                                    }
                                }
                            </script>



                        </td>
                    </tr>
                @endforeach

        </table>

    </body>

    </html>

@endsection
