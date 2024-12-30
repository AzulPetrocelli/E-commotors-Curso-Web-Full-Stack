
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

//thiago --> tarea para azul 

    document.addEventListener('DOMContentLoaded', function () {
        const confirmarBtns = document.querySelectorAll('.confirmar-eliminacion'); // Botones para eliminar
        const confirmacionAside = document.querySelector('.confirmacion'); // El aside
        const cancelarBtn = document.querySelector('.cancelar'); // Botón de cancelar
        const formEliminar = document.querySelector('#form-confirmar-eliminar'); // Formulario dentro del aside
        const nombreMotoSpan = document.querySelector('#nombre-moto'); // Span para mostrar el nombre del producto

        // Mostrar la confirmación al hacer clic en el ícono de eliminar
        confirmarBtns.forEach(boton => {
            boton.addEventListener('click', function (e) {
                e.preventDefault();

                const motoId = this.dataset.id; // Obtener ID de la moto
                const motoNombre = this.dataset.nombre; // Obtener nombre de la moto

                // Actualizar el nombre del producto en el mensaje
                nombreMotoSpan.textContent = motoNombre;

                // Actualizar la acción del formulario
                formEliminar.setAttribute('action', `/motos/${motoId}`);

                // Mostrar el aside de confirmación
                confirmacionAside.classList.remove('visually-hidden');
            });
        });

        // Ocultar el aside al hacer clic en "Cancelar"
        cancelarBtn.addEventListener('click', function () {
            confirmacionAside.classList.add('visually-hidden');
        });
    });

