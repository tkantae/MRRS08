<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MRRS System</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <img src="logo.png" alt="โลโก้ระบบจองห้องประชุม">
            <section class="staff">
                <a href="staff.html" class="button">เข้าสู่ระบบ</a>
              </section>
            <h1>Meeting Room <br> Reserve System</h1>
            <h2>ยินดีต้อนรับเข้าสู่ระบบจองห้องประชุม โปรดเลือกการปฏิบัติงาน <br>
                ที่ท่านต้องการดำเนินการในส่วนถัดไป</h2>
        </header>
        <main>
            <section class="buttons">
                <a href="booking.html" class="button">จองห้องประชุม</a>
                <a href="status.html" class="button">ตรวจสอบสถานะ</a>
            </section>
        </main>

    </body>

    <style>
        *{
            color:#ffffff;
        }

        h1{
            font-size: 80px;
            filter: drop-shadow(3px 3px 3px black);
        }

        h2{
            font-family: 'Inter', sans-serif; /* เปลี่ยน font-family เป็น 'Inter' */
        }

        body{
            background: linear-gradient(to right, #5E96EB, #FD84F1)
        }

        .staff {
            float: right;
            margin-top: 10px;
        }

        .buttons {
            display: flex;
            margin-top: 20px;
        }

        .buttons .button {
            display: inline-block;
            margin: 0 10px;
        }




    </style>


</html>
