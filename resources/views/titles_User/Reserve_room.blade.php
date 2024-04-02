@extends('layout.User')

@section('title', 'จองห้องประชุม')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <script src="https://kit.fontawesome.com/e71f46c45f.js" crossorigin="anonymous"></script>
    <i class="fa-solid fa-calendar-days" ></i>
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
<<<<<<< HEAD
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ข้อมูลคำนำหน้าชื่อ (Title)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/titles<?php if (isset($title_id)) {
                        echo '/' . $title_id->tit_id;
                    } ?>" method="post">
                        <?php if (isset($title_id)) { ?>
                        @method('PUT')
                        <?php } ?>
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">คำนำหน้าชื่อ</label>
                                <input type="text" name="tit_name" value="<?php if (isset($title_id)) {
                                    echo $title_id->tit_name;
                                } ?>" class="form-control"
                                    id="exampleInputEmail1" placeholder="เช่น นาย นาง นางสาว ฯลฯ">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="tit_is_active" <?php if(isset($title_id) &&
                                            $title_id->tit_is_active == 1){?> checked
                                    <?php }?> class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">ใช้งาน</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="tit_image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <!-- /.card-body -->

    <link rel="stylesheet" href="{{ url('assets/dist/css/reservation.css') }}">

</div>
<!-- /.content -->

@endsection
