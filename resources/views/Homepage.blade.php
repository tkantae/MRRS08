<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบจองห้องประชุม</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="logo.png" alt="โลโก้ระบบจองห้องประชุม">
    <h1>ระบบจองห้องประชุม</h1>
  </header>
  <main>
    <section class="hero-banner">
      <h2>จองห้องประชุม</h2>
      <a href="booking.html" class="button">จองห้องประชุม</a>
    </section>
    <section class="status">
      <h2>ติดตามสถานะการจอง</h2>
      <a href="status.html" class="button">ตรวจสอบสถานะ</a>
    </section>
    <section class="staff">
      <h2>สำหรับเจ้าหน้าที่</h2>
      <a href="staff.html" class="button">เข้าสู่ระบบ</a>
    </section>
  </main>
  <footer>
    <p>Copyright &copy; 2024 Meeting Room Reserve System</p>
  </footer>
</body>

<style>
/* ส่วนแบนเนอร์หลัก */
.hero-banner {
  background-color: #0073b7;
  color: #fff;
  text-align: center;
}

.hero-banner h2 {
  margin-top: 20px;
  margin-bottom: 10px;
}

.hero-banner p {
  font-size: 16px;
  line-height: 1.5;
}

.hero-banner .button {
  background-color: #fff;
  color: #0073b7;
  border: 1px solid #0073b7;
  padding: 10px 20px;
  text-decoration: none;
}

.hero-banner .button:hover {
  background-color: #0073b7;
  color: #fff;
}

/* ส่วนติดตามสถานะการจอง */
.status {
  background-color: #f2f2f2;
}

.status h2 {
  margin-top: 0;
}

.status p {
  font-size: 16px;
  line-height: 1.5;
}

.status .button {
  background-color: #0073b7;
  color: #fff;
  border: 1px solid #0073b7;
  padding: 10px 20px;
  text-decoration: none;
}

.status .button:hover {
  background-color: #fff;
  color: #0073b7;
}

/* ส่วนสำหรับเจ้าหน้าที่ */
.staff {
  background-color: #ddd;
}

.staff h2 {
  margin-top: 0;
}

.staff p {
  font-size: 16px;
  line-height: 1.5;
}

.staff .button {
  background-color: #0073b7;
  color: #fff;
  border: 1px solid #0073b7;
  padding: 10px 20px;
  text-decoration: none;
}

.staff .button:hover {
  background-color: #fff;
  color: #0073b7;
}

</style>


</html>
