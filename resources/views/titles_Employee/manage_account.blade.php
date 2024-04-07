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
                    <form   action="{{ route('titles_Employee.destroy-rooms' , $user->id) }}" method="post" style="display: inline;">
                        <a href="{{route('titles_Employee.edit_rooms',$user->id)}}" method="post"class="btn btn-warning">
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


@endsection

