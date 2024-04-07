@extends('layout.Employee')

@section('title', 'User Account Management')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    <table id="example" class="display" style="width:110%">
    <thead>
        <tr>
            <th style="width: 10%">No.</th>
            <th>Username</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Start Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->us_name }}</td>
                <td>{{ $user->us_fname }} {{ $user->us_lname }}</td>
                <td>{{ $user->us_tel }}</td>
                <td>{{ $user->created_at }}</td>
                <td>

<<<<<<< Updated upstream
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">

        {{--style นี้ท่าไม่ใช้หรืออยากเปลี่ยน หรือจะเอาไปแยกไฟล์จัดการได้เลย--}}
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
    </head>

    <body>
        {{--พวก section div ต่างอันไหนท่าไม่ได้ใช้ตกแต่ง ลบทิ้งได้ท่าไม่ได้เกี่ยวกับตัวระบบ--}}
        <section class="content">
            <div class="row justify-content-center">
                <div class="col">
                    {{--ตัว card กล่องทั้งหมด--}}
                    <div class="card">
                        {{--หัว card--}}
                        <div class="card-header">
                            <h3 class="card-title">User Account Management</h3>
                        </div>
                        {{--ตัว card--}}
                        <div class="card-body">
                            <div class="btn-container">
                                <a href="{{ url('/Manage_account/add-user') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i> Add
                                    User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        {{--ตารางหัว culum --}}
                                        <tr>
                                            <th style="width: 10%">No.</th>
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Mobile No.</th>
                                            <th>Start Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        {{--loop แสดงข้อมูล culum --}}
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->us_name }}</td>
                                                <td>{{ $user->us_fname }} {{ $user->us_lname }}</td>
                                                <td>{{ $user->us_tel }}</td>
                                                <td>{{ $user->startdate }}</td>
                                                <td>
                                                    <form method="POST"
                                                        action="{{ route('titles_Employee.destroy-user', ['user' => $user]) }}"
                                                        style="display: inline;">
                                                        <a href="{{ route('titles_Employee.edit_user', ['user' => $user->id]) }}"
                                                            class="btn btn-warning">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" value="Delete" class="btn btn-danger">
                                                            Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{--ด้านใต้ card--}}
                        <div class="card-footer clearfix text-center">
                            <ul class="pagination pagination-sm m-0">
                                {!! $users->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    
    </html>
=======
                    <form   action="{{ route('titles_Employee.destroy' , $user->id) }}" method="post" style="display: inline;">
                        <a href="{{route('titles_Employee.edit_account_user',$user->id)}}" method="post"class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>

>>>>>>> Stashed changes
@endsection

