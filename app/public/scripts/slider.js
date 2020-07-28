// **********************SLIDER JS 1*********************

let slide = ['app/public/images/slide_1.jpg', 'app/public/images/slide_2.jpg', 'app/public/images/slide_3.jpg', 'app/public/images/slide_4.png'];

let i = 0;
setInterval(function () {
    document.getElementById("slide2").src = slide[i];
    i++;
    if (i == 4) i = 0;
}, 3000);

function changeSlide(sens) {
    i = i + sens;
    if (i < 0)
        i = slide.length - 1;

    if (i > slide.length - 1)
        i = 0;

    document.getElementById("slide2").src = slide[i];
}

