@extends('layout.Employee')



@section('title', 'จัดการห้องประชุม')
@section('content')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h3 class="card-title">เพิ่มห้องประชุม</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{-- form กรอกข้อมูล --}}
            <form action="" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        placeholder="First Name">
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
