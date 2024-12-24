
//PARA QUE APAREZCA Y DESAPAREZCA EL ASIDE DEL FILTER
var botonFiltrar = document.querySelector(".filtrar")

botonFiltrar.addEventListener("click", () => {
  var contenedorAside = document.querySelector(".filter-sidebar")
  
  if(contenedorAside.classList.contains("aside-oculto")){
      contenedorAside.classList.remove("aside-oculto")
  } else {
      contenedorAside.classList.add("aside-oculto")
  }
})