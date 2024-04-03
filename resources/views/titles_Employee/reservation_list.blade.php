@extends('layout.Employee')

@section('title', 'รายการอนุมัติ')
@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<style>
     .table-bordered {
        border: none; /* ลบเส้นกรอบนอก */
    }
    .table-bordered thead tr td {
        border: none;
        background-color: #5E96EB; /* สี  */
    }
    .table-bordered thead tr td:first-child {
        border-top-left-radius: 10px; /* ขอบมนด้านบนซ้ายสุดของหัวตาราง */
    }
    .table-bordered thead tr td:last-child {
        border-top-right-radius: 10px; /* ขอบมนด้านบนขวาสุดของหัวตาราง */
    }
    .fa-info-circle {
            font-size: 1.5em; /* ขนาดไอคอน */
            color: gray; /* สีของไอคอน */
            border-radius: 50%; /* ทำให้เป็นวงกลม */
            transition: background-color 0.3s, color 0.3s; /* เพิ่ม transition */
        }

        .fa-info-circle:hover, .fa-info-circle:focus {
            background-color: #7c7c7c; /* สีพื้นหลังเมื่อ hover */
            color: black; /* สีของไอคอนเมื่อ hover */
        }
        .btn-cancel {
            margin-right: 10px;
            font-size: 14px; /* ขนาดตัวอักษร */
            padding: 2px 4px; /* ขนาด padding ซ้าย-ขวา บน-ล่าง */
        }
</style>


<table class="table table-bordered">
    <thead>
        <tr>
            <td border-top-left-radius =10px width="35px">#</td>
            <td >ลำดับ</td>
            <td>วันที่เข้าใช้</td>
            <td>เวลา</td>
            <td>ขนาดห้อง</td>
            <td  border-top-right-radius= 10px; width="150px">Tools</td>
        </tr>
    </thead>
    <tbody>
        <td width="35px">#</td>
        <td border-top-left-radius =10px;>ลำดับ</td>
        <td>วันที่เข้าใช้</td>
        <td>เวลา</td>
        <td>ขนาดห้อง</td>
        <td><button class="btn btn-cancel" onclick="showPopupcancel()"  style="background-color: #dc3545; color: white">ยกเลิก</button>
        <i font-size = "50%" class="fas fa-info-circle" style="color: gray;" onclick="showPopupi()"></i></td>
    </tbody>
</table>
@endsection
<script>
    function showPopupi() {
        const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel!",
    reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        swalWithBootstrapButtons.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
        });
    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire({
        title: "Cancelled",
        text: "Your imaginary file is safe :)",
        icon: "error"
        });
    }
    });
    }

    function showPopupcancel() {
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
    },
    buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel!",
    reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        swalWithBootstrapButtons.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
        });
    } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire({
        title: "Cancelled",
        text: "Your imaginary file is safe :)",
        icon: "error"
        });
    }
    });
}
</script>
