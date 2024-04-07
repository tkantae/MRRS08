@extends('layout.Status')

@section('title', 'จองห้องประชุม')
@section('reserv')


<!-- SORCE -->
<link rel="stylesheet" href="{{ url('assets/dist/css/LineAPI_Verification.css') }}">
<script src="{{ url('assets/dist/css/LineAPI_Verification.js') }}"></script>
<link rel="stylesheet" href="{{ url('assets/dist/css/fillinformation.css') }}">

    <!-- /.ALERT LINE API VERIFICATION --> 
<section class="reserv">

<?php
    $current_url = $_SERVER['REQUEST_URI'];
    if ($current_url == '/fillInformation'){
    ?>
<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Line ยืนยันตัวตน!</h2>
    <p>โปรดเข้าสู่ระบบไลน์เพื่อยืนยันตัวตน:</p>
    <button onclick="window.location.href = '{{ route('line.login') }}'">เข้าสู่ระบบ Line</button>
  </div>
</div>
<?php } ?>


 <!-- /.Fill Information--> 
<div class="textHead">
    กรอกข้อมูลการจอง
</div>
<div class="row">
    <div class="inputBox" id="Name">
        <input type="text" required="required">
        <span class="text">ชื่อ</span>
    </div>
    <div class="inputBox" id="Surname">
        <input type="text" required="required">
        <span class="text">สกุล</span>
    </div>
</div>
<div class="row">
    <div class="inputBox" id="tel">
        <input type="text" required="required">
        <span class="text">เบอร์โทรศัพท์</span>
    </div>
</div>
<div class="row" >
    <div class="inputBox" id="agenda">
        <input type="textarea" required="required" id="agenda">
        <span class="text">วาระการประชุม</span>
    </div>
</div>
<div class="row" id="confirm">
    <div class="boxConfirm">
        <span class="confirmText">ยืนยันการจอง</span>
    </div>
</div>

@endsection