@extends('layout.Status')

@section('title', 'จองห้องประชุม')
@section('reserv')
<link rel="stylesheet" href="{{ url('assets/dist/css/fillinformation.css') }}">
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
<div class="row">
    <div class="inputBox" id="agenda">
        <input type="textarea" required="required">
        <span class="text">วาระการประชุม</span>
    </div>
</div>
<div class="row" id="confirm">
    <div class="boxConfirm">
        <span class="confirmText">ยืนยันการจอง</span>
    </div>
</div>

@endsection