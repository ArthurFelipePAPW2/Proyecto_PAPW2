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