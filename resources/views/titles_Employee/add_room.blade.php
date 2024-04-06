@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/css.buttonadd/add.css') }}"> --}}

    <!-- Main content -->
    <section class="content flex">
        <br>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">เพิ่มบัญชีผู้ใช้</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('titles_Employee.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="room_name">ชื่อห้อง:</label>
                        <input type="text" class="form-control" id="room_name" name="room_name"
                            placeholder="ชื่อห้อง">
                    </div>

                    <div class="form-group">
                        <label for="price">ราคาต่อวัน:</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="ik8k">
                    </div>
                    <div class="form-group">
                        <label for="room_nameid">รหัสห้อง:</label>
                        <input type="email" class="form-control" id="room_nameid" name="room_nameid" placeholder="รหัสห้อง">
                    </div>
                    <div class="form-group">
                        <label for="sizeroom">ขนาด:</label>
                        <select class="form-control" id="sizeroom" name="sizeroom">
                            <option value="S">small</option>
                            <option value="M">medium</option>
                            <option value="L">large</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="typeroom">ประเภทของห้อง:</label>
                        <select class="form-control" id="typeroom" name="typeroom">
                            <option value="1">private</option>
                            <option value="0">public</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">สถานะห้องประชุม:</label>
                        <select class="form-control" id="typeroom" name="typeroom">
                            <option value="1">avaliable</option>
                            <option value="0">unvaliable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pic1">picture1:</label>
                        <input type="password" class="form-control" id="pic1" name="pic1" placeholder="details room">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                        <button type="reset" class="btn btn-default float-right">Reset</button>
                    </div>

                </form>
            </div>
        </div>

    </section>
@endsection
