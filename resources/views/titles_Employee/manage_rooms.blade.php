@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')


<head>
<<<<<<< Updated upstream
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Account Management</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">

<style>
    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 130%;
    }

    .card-header h3 {
        margin: 0;
    }

    .btn-container {
        margin-bottom: 20px;
    }

    .pagination {
        justify-content: center;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }

    .btn-danger {
        margin-left: 5px;
    }

    .table {
        width: 100%;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table th:first-child,
    .table td:first-child {
        text-align: left;
    }

    .table th:last-child,
    .table td:last-child {
        text-align: right;
    }
</style>
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {

        } );
    } );
    </script>

>>>>>>> Stashed changes
</head>

<body>
<<<<<<< Updated upstream
<section class="content">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Account Management</h3>
                </div>
                <div class="card-body">
                    <div class="btn-container">
                        <a href="{{ url('/add-room') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                            Room</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10%">No.</th>
                                    <th>ชื่อห้อง</th>
                                    <th>ขนาดห้อง</th>
                                    <th>สถานะห้องประชุม</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $rooms)
                                    <tr>
                                        <td>{{ $rooms->id }}</td>
                                        <td>{{ $rooms->ro_name }}</td>
                                        @if($rooms->ro_size == 'S')
                                        {
                                          <td>small</td>
                                        }
                                        @elseif($rooms->ro_size == 'M'){
                                          <td>medium</td>
                                        }
                                        @else{
                                            <td>large</td>
                                        }
                                        @endif


                                        @if($rooms->ro_avaliable == 1)
                                        {
                                          <td>avaliable</td>
                                        }
                                        @else{
                                          <td>unvaliable</td>
                                        }
                                        @endif

                                        <td>
                                            <a href="{{ url('/edit-room/' . $rooms->ro_id) }}"
                                                class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <form id="delete-form-{{ $rooms->ro_id }}" method="post"
                                                action="{{ url('/delete-user/' . $rooms->ro_id) }}"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteUser('{{ $rooms->ro_id }}')"><i
                                                        class="fas fa-trash-alt"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix text-center">
                    <ul class="pagination pagination-sm m-0">
                        {{-- {!! $rooms->links('pagination::bootstrap-4') !!} --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function deleteUser(roomId) {
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
                document.getElementById('delete-form-' + roomId).submit();
            }
        });
    }
</script>
=======
    <table id="example" class="display" style="width:110%">
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
                    @if($rooms->ro_size == 'S')

                      <td>small</td>

                    @elseif($rooms->ro_size == 'M')
                      <td>medium</td>

                    @else
                        <td>large</td>
                    
                    @endif


                    @if($rooms->ro_avaliable == 1)
                    {
                      <td>avaliable</td>
                    }
                    @else{
                      <td>unvaliable</td>
                    }
                    @endif

                    <td>
                        <a href="{{ url('/edit-room/' . $rooms->ro_id) }}"
                            class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        <form id="delete-form-{{ $rooms->ro_id }}" method="post"
                            action="{{ url('/delete-user/' . $rooms->ro_id) }}"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger"
                                onclick="deleteUser('{{ $rooms->ro_id }}')"><i
                                    class="fas fa-trash-alt"></i> Delete</button>
                        </form>
                        <a href="{{ url('/edit-room/' . $rooms->ro_id) }}"
                            class="btn btn-warning"><i class="fas fa-edit"></i> i</a>
                    </td>
                </tr>
            @endforeach

    </table>

>>>>>>> Stashed changes
</body>

</html>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======

>>>>>>> Stashed changes
@endsection
