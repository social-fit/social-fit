contador = true;
let barra_lateral = document.getElementById("barralateral").outerHTML;

function apertar_botao() {
    console.log(contador);
    if (contador == true) {
        ocultar_barra();
    }
    else {
        mostrar_barra();
    }
}

function ocultar_barra() {

    a = document.getElementById("pagina");
    a.style.opacity = 0;

    b = document.getElementById("barralateral");
    b.innerHTML = "";
    b.className = "";
    document.getElementById("pagina_real").className = "col-md-12 mx-auto my-4";

    a.style.opacity = 1;

    contador = false;

}
function mostrar_barra() {
    a = document.getElementById("pagina");
    a.style.opacity = 0;
    document.getElementById("pagina_real").className = "col-md-10 mx-auto my-4";
    b = document.getElementById("barralateral");
    b.outerHTML = barra_lateral;

    a.style.opacity = 1;

    contador = true;

}