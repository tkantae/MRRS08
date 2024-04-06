@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet"
 href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}">


    <div class="float-right pb-4">
        <a href="{{ url('/add-user') }}" class="btn btn-success"> Add Room</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อห้อง</th>
                <th>ขนาด</th>
                <th>สถานะ</th>
                <th width="150px">Tools</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->ro_name }}</td>
                    <td>{{ $room->ro_size }}</td>
                    <td>{{ $room->ro_avaliable }}</td>
                    <td>
                        <a href="{{ url('/edit-user/'.$room->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Add delete functionality -->
                        <form method="post" action="{{ url('/delete-user/'.$room->id) }}" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="delete()">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
