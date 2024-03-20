<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - แอ๊ะๆๆๆ</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script> <!-- เพิ่มไลบรารี Anime.js -->
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

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* ให้ส่วนของเนื้อหาเต็มจอ */
            justify-content: space-between; /* จัดให้เนื้อหาอยู่ในส่วนล่างของหน้า */
        }

        header {
            background: linear-gradient(to right, #5E96EB, #5E96EB, #FD84F1);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header p {
            font-style: italic;
        }

        section {
            display: flex;
            justify-content: center; /* จัดให้ส่วนของ "Click Me!!!" อยู่ตรงกลาง */
            align-items: center; /* จัดให้ส่วนของ "Click Me!!!" อยู่ตรงกลาง */
            height: 60vh; /* ให้ "Click Me!!!" มีความสูงเท่ากับหน้าจอ */
        }

        .click-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 4rem;
            width: 10rem;
            font-size: 1.5rem;
            border-radius: 5px;
            border: none;
            box-shadow: 1px 1px 5px black;
            background-color: white;
        }


        footer {
            background: linear-gradient(to right, #5E96EB, #5E96EB, #FD84F1);
            color: #fff;
            text-align: center;
            padding: 10px;
        }

    </style>

    <script>
        const button = document.getElementById("runaway-btn");

        const animateMove = (element, prop, pixels) =>
        anime({
            targets: element,
            [prop]: `${pixels}px`,
            easing: "easeOutCirc"
        });

        ["mouseover", "click"].forEach(function (el) {
            button.addEventListener(el, function (event) {
                const top = getRandomNumber(window.innerHeight - this.offsetHeight);
                const left = getRandomNumber(window.innerWidth - this.offsetWidth);

                 // จำกัดการเคลื่อนที่ให้อยู่ภายในขอบเขตของหน้าต่างเบราว์เซอร์
                const constrainedTop = Math.max(0, Math.min(top, window.innerHeight - this.offsetHeight));
                const constrainedLeft = Math.max(0, Math.min(left, window.innerWidth - this.offsetWidth));


                animateMove(this, "left", left).play();
                animateMove(this, "top", top).play();
            });
        });

        const getRandomNumber = (num) => {
            return Math.floor(Math.random() * (num + 1));
        };

    </script>
</body>
</html>
