
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var botonFiltrar = document.querySelectorAll(".filtrar")
const body = document.body;

botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => {
        var contenedorAside = document.querySelector(".filter-sidebar")
        
        if(contenedorAside.classList.contains("aside-oculto")){
            contenedorAside.classList.toggle("aside-oculto")
            body.classList.toggle('fondo-gris');
        } else {
            contenedorAside.classList.toggle("aside-oculto")
            body.classList.toggle('fondo-gris');
        }
      })
})