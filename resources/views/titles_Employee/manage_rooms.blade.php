@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')



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
                    <td>{{ $rooms->ro_id }}</td>
                    <td>{{ $rooms->ro_name }}</td>
                    <td>{{ $rooms->ro_size }}</td>
                    <td>{{ $rooms->ro_avaliable }}</td>
                    <td>
                        <a href="{{ url('/edit-user/'.$user->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Add delete functionality -->
                        <form method="post" action="{{ url('/delete-user/'.$user->id) }}" style="display: inline-block;">
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
