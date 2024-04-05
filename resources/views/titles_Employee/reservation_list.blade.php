{{-- <!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายละเอียดการยกเลิก</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: sans-serif;
    }
    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 100;
      overflow-y: scroll;
    }
    .popup-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      max-width: 80%; /* ปรับขนาด popup เป็น 80% ของหน้าจอ */
      max-height: 80%; /* ปรับขนาด popup เป็น 80% ของหน้าจอ */
      overflow-y: auto; /* ให้มีการเลื่อนลงเมื่อข้อมูลมีมากเกินไป */
    }
    .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
    .header {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .body {
      margin-top: 20px;
    }
    .row {
      margin-bottom: 20px;
    }
    .label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">รายละเอียดการยกเลิก</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button onclick="openPopup()" class="btn btn-light my-2 my-sm-0">แสดงรายละเอียดการยกเลิก</button>
        </li>
      </ul>
    </div>
  </nav>

  <div class="popup" id="popup">
    <div class="popup-content">
      <div class="header">
        <h1>รายละเอียดการยกเลิก</h1>
      </div>
      <div class="body">
        <div class="container">
          <div class="row">
            <div class="col">
              <label>รหัสการจอง:</label> 56ad5v
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h2>รายละเอียดผู้จอง</h2>
              <ul>
                <li><label>ชื่อ:</label> นายธนูธง องใหญ่</li>
                <li><label>ID Line:</label> thanuthonginwz8</li>
                <li><label>เบอร์โทร:</label> 012-3456789</li>
                <li><label>E-Mail:</label> ongYAJMAKMAK@go.buu.ac.th</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h2>รายละเอียดการจอง</h2>
              <ul>
                <li><label>วันที่ที่จอง:</label> 2024-04-05</li>
                <li><label>เวลา:</label> xx.xx u. xx.xx น.</li>
              </ul>
            </div>
          </div>
          <!-- ส่วนที่เพิ่มเข้ามาเพื่อทำให้ข้อมูลเลื่อนลงเมื่อมีมากเกินไป -->
          <div class="row">
            <div class="col">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non velit sit amet ligula facilisis fringilla. Curabitur blandit sem nec tortor blandit, id sollicitudin libero vehicula. Integer dapibus vel nulla a placerat. Sed a nisi euismod, pretium nisi eget, interdum felis. Praesent et turpis vel dolor consequat convallis id in nisl. Nulla facilisi. Donec mollis eros sit amet felis pellentesque, id fermentum dolor congue. Vestibulum nec magna pharetra, maximus nulla vel, vehicula nisl. Nulla nec sagittis sapien, id feugiat nulla. Nulla at mauris eu leo rutrum egestas ac ut tellus. Cras posuere enim ut sapien posuere, vel fringilla justo ultrices. Maecenas sed nisl nec felis pharetra pharetra. Nulla facilisi. Donec sagittis mauris id sem tristique, sed pellentesque elit tristique. Sed nec sollicitudin lectus.</p>
            </div>
          </div>
          <!-- สิ้นสุดส่วนที่เพิ่มเข้ามา -->
        </div>
      </div>
      <button class="close-button btn btn-secondary" onclick="closePopup()">ปิด</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function openPopup() {
      document.getElementById("popup").style.display = "block";
    }
    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }
  </script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Container Example</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h1>Bootstrap Container Example</h1>
  <p>This is a basic example of a Bootstrap container.</p>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

