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

