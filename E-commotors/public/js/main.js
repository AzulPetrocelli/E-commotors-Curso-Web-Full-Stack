
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var botonFiltrar = document.querySelectorAll("section .filtrar, form .filtrar, table .filtrar");
const body = document.body;

botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => {
        var contenedorAside = document.querySelector(".filter-sidebar")

        if(contenedorAside.classList.contains("aside-oculto")){
            contenedorAside.classList.toggle("aside-oculto");
            body.classList.toggle('fondo-gris');
        } else {
            contenedorAside.classList.toggle("aside-oculto");
            body.classList.toggle('fondo-gris');
        }
      })
})

var botonEliminar = document.querySelectorAll("i.la-times-circle");
var confirmacionAside = document.querySelector(".confirmacion");

botonEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        if(confirmacionAside.classList.contains("aside-oculto")){
            confirmacionAside.classList.toggle("aside-oculto");
            body.classList.toggle('fondo-gris');
        }
      })
})

var aceptarOCancelar = document.querySelectorAll("aside.confirmacion a.boton-principal")

aceptarOCancelar.forEach(boton => {
    boton.addEventListener("click", () => {
        if(!confirmacionAside.classList.contains("aside-oculto")){
            confirmacionAside.classList.add("aside-oculto");
        }
      })
})
