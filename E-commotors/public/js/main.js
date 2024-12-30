
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var pantallaGris = document.querySelector('.pantalla-gris')

const mostrarOcultar = (referencia) => {
    var contenedorAside = document.querySelector(referencia)

        if(contenedorAside.classList.contains("visually-hidden")){
            contenedorAside.classList.toggle("visually-hidden");
            pantallaGris.classList.toggle('fondo-gris');
        } else {
            contenedorAside.classList.toggle("aside-oculto");
            pantallaGris.classList.toggle('fondo-gris');
        }
}

// Aparecer el aside del filtro
var botonFiltrar = document.querySelectorAll(".show");
botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar(".container-show"))
})

// Aparecer Formulario para agregar porducto
var botonAgregarProducto = document.querySelectorAll("#agregar-producto, .show");
botonAgregarProducto.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar("#form-agregar-producto"))
})

// Aparecer el mensaje de Eliminar producto
var botonEliminar = document.querySelectorAll(".eliminar");
botonEliminar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar(".confirmacion"))
})

