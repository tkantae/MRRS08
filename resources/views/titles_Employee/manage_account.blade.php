@extends('layout.Employee')

@section('title', 'User Account Management')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
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
    </head>

    <body>
        <section class="content">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">User Account Management</h3>
                        </div>
                        <div class="card-body">
                            <div class="btn-container">
                                <a href="{{ url('/add-user') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                                    User</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
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
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->us_name }}</td>
                                                <td>{{ $user->us_fname }} {{ $user->us_lname }}</td>
                                                <td>{{ $user->us_tel }}</td>
                                                <td>{{ $user->startdate }}</td>
                                                <td>
                                                    <a href="{{route('titles_Employee.edit_account_user',$user ->us_id)}}"class="btn btn-warning">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form id="delete-form-{{ $user->id }}" method="post"
                                                        action="{{ url('/delete-user/' . $user->id) }}"
                                                        style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="deleteUser('{{ $user->id }}')"><i
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
                                {!! $users->links('pagination::bootstrap-4') !!}
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
            function deleteUser(userId) {
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
        </script>
    </body>

    </html>
@endsection
