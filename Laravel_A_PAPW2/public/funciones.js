 function MostrarPass() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function MostrarPassLogin() {
    var x = document.getElementById("passL");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function Evaluar(valor) {
    var Cor1 = document.getElementById("corazon1");
    var Cor2 = document.getElementById("corazon2");
    var Cor3 = document.getElementById("corazon3");
    var Cor4 = document.getElementById("corazon4");
    var Cor5 = document.getElementById("corazon5");

    switch (valor){
        case 1:
            Cor1.classList.add("rated-heart");
            Cor2.classList.remove("rated-heart");
            Cor3.classList.remove("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 2:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.remove("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 3:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 4:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.add("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 5:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.add("rated-heart");
            Cor5.classList.add("rated-heart");
        break;

    }

}

function EvaluarMoficiar(valor) {
    var Cor1 = document.getElementById("corazon1-modificar");
    var Cor2 = document.getElementById("corazon2-modificar");
    var Cor3 = document.getElementById("corazon3-modificar");
    var Cor4 = document.getElementById("corazon4-modificar");
    var Cor5 = document.getElementById("corazon5-modificar");

    switch (valor){
        case 1:
            Cor1.classList.add("rated-heart");
            Cor2.classList.remove("rated-heart");
            Cor3.classList.remove("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 2:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.remove("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 3:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.remove("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 4:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.add("rated-heart");
            Cor5.classList.remove("rated-heart");
        break;
        case 5:
            Cor1.classList.add("rated-heart");
            Cor2.classList.add("rated-heart");
            Cor3.classList.add("rated-heart");
            Cor4.classList.add("rated-heart");
            Cor5.classList.add("rated-heart");
        break;

    }

}
$('#right-arrow').click(function(){
    var currentSlide = $('.slide.active');
    var nextSlide = currentSlide.next();

    currentSlide.fadeOut(300).removeClass('active');
    nextSlide.fadeIn(300).addClass('active');

    if(nextSlide.length == 0){
        $('.slide').first().fadeIn(300).addClass('active');
    }
});

$('#left-arrow').click(function(){
    var currentSlide = $('.slide.active');
    var prevSlide = currentSlide.prev();

    currentSlide.fadeOut(300).removeClass('active');
    prevSlide.fadeIn(300).addClass('active');

    if(prevSlide.length == 1){
        $('.slide').first().fadeIn(300).addClass('active');
    }
});


 