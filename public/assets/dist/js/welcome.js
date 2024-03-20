const button = document.getElementById("runaway-btn");

const animateMove = (element, prop, pixels) =>
  anime({
    targets: element,
    [prop]: `${pixels}px`,
    easing: "linear" // เปลี่ยนจาก "easeOutCirc" เป็น "linear"
  });

["mouseover", "click"].forEach(function (el) {
  button.addEventListener(el, function (event) {
    // คำนวณพื้นที่ทั้งหมดของหน้าเว็บ
    const pageWidth = document.body.scrollWidth;
    const pageHeight = document.body.scrollHeight;

    // สุ่มตำแหน่งใหม่ของปุ่ม
    const top = getRandomNumber(pageHeight - this.offsetHeight);
    const left = getRandomNumber(pageWidth - this.offsetWidth);

    animateMove(this, "left", left).play();
    animateMove(this, "top", top).play();
  });
});

const getRandomNumber = (num) => {
  return Math.floor(Math.random() * (num + 1));
};
