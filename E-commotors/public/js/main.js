
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var pantallaGris = document.querySelector('.pantalla-gris')

const mostrarOcultarClase = (nombreClase) => {
    var contenedorAside = document.querySelector("." + nombreClase)

        if(contenedorAside.classList.contains("visually-hidden")){
            contenedorAside.classList.toggle("visually-hidden");
            pantallaGris.classList.add('fondo-gris');
        } else {
            contenedorAside.classList.toggle("aside-oculto");
            pantallaGris.classList.remove('fondo-gris');
        }
}

// Aparecer el aside del filtro
var botonFiltrar = document.querySelectorAll(".show");
botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultarClase("filter-sidebar"))
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
