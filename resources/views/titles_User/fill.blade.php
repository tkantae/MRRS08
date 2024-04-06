@extends('layout.Status')

@section('title', 'กรอกข้อมูล')

@section('reserv')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SORCE -->
<link rel="stylesheet" href="{{ url('assets/LineAPI_Verification/LineAPI_Verification.css') }}">
<script src="{{ url('assets/LineAPI_Verification/LineAPI_Verification.js') }}"></script>

<!-- /.ALERT LINE API VERIFICATION --> 
<section class="reserv">
<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Line ยืนยันตัวตน!</h2>
    <p>โปรดเข้าสู่ระบบไลน์เพื่อยืนยันตัวตน:</p>
    <button onclick="redirectToLineLogin()">เข้าสู่ระบบ Line</button>
  </div>
</div>


@endsection
