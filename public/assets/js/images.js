let a = document.getElementById("image");
let b = ["images.jpg", "images (1).jpg", "images (2).jpg", "images (3).jpg"];
setInterval(function () {
    let random = Math.floor(Math.random() * 4);
    Image.src = images[random];
}, 800);
