
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var botonFiltrar = document.querySelectorAll(".filtrar")

botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => {
        var contenedorAside = document.querySelector(".filter-sidebar")
        
        if(contenedorAside.classList.contains("aside-oculto")){
            contenedorAside.classList.remove("aside-oculto")
        } else {
            contenedorAside.classList.add("aside-oculto")
        }
      })
})