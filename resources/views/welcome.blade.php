<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - แอ๊ะๆๆๆ</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script> <!-- เพิ่มไลบรารี Anime.js -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/welcome.css') }}">
</head>
<body>
    <header>
        <h1>อยากดูเว็บไซต์เราหรอ</h1>
        <p>กดปุ่มสิ เดะพาไปดู</p>
    </header>

    <section class="click-container">
        <div id="leave_from_mouse" style=" position: fixed">
            <button id='runaway-btn' class="click-button">Click Me!!!</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 ปีใหม่แล้ว...แล้วมีคนใหม่ได้ยัง</p>
    </footer>

    <script src="assets/dist/js/welcome.js"></script>
</body>
</html>
