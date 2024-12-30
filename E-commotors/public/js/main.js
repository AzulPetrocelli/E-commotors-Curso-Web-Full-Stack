var formulario = document.getElementById("form-agregar-producto");

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
/* var botonEliminar = document.querySelectorAll(".eliminar");
botonEliminar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar(".confirmacion"))
})
 */
//thiago --> tarea para azul
//METODO DESTROY
    document.addEventListener('DOMContentLoaded', function () {
        const confirmarBtns = document.querySelectorAll('.confirmar-eliminacion'); // Botones para eliminar
        const confirmacionAside = document.querySelector('.confirmacion'); // El aside
        const pantallaGris = document.querySelector('.pantalla-gris'); // Fondo gris
        const formEliminar = document.querySelector('#form-confirmar-eliminar'); // Formulario dentro del aside
        const nombreMotoSpan = document.querySelector('#nombre-moto'); // Span para mostrar el nombre del producto

        // Mostrar la confirmación al hacer clic en el ícono de eliminar
        confirmarBtns.forEach(boton => {
            boton.addEventListener('click', function (e) {
                e.preventDefault();

                // Agregar fondo gris
                pantallaGris.classList.toggle('fondo-gris');

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

        const cancelarBtn = document.querySelector('.cancelar'); // Botón de cancelar

        // Ocultar el formulario y el fondo gris al cancelar
        cancelarBtn.addEventListener('click', function () {
            formEditar.classList.add('visually-hidden');
            pantallaGris.classList.toggle('fondo-gris');
        });

    });


    //METODO UPDATE
    document.addEventListener('DOMContentLoaded', function () {
        const editarBtns = document.querySelectorAll('.editar-moto'); // Botones de editar
        const formEditar = document.querySelector('#form-editar-producto'); // Formulario de edición
        const pantallaGris = document.querySelector('.pantalla-gris'); // Fondo gris
        const cancelarBtn = formEditar.querySelector('.cancelar'); // Botón de cancelar

        editarBtns.forEach(boton => {
            boton.addEventListener('click', function (e) {
                e.preventDefault();

                // Agregar fondo gris
                pantallaGris.classList.toggle('fondo-gris');

                // Rellenar el formulario con los datos de la moto
                formEditar.querySelector('#edit-id-moto').value = this.dataset.id;
                formEditar.querySelector('#edit-nombre').value = this.dataset.nombre;
                formEditar.querySelector('#edit-estado').value = this.dataset.estado;
                formEditar.querySelector('#edit-precio').value = this.dataset.precio;
                formEditar.querySelector('#edit-categoria').value = this.dataset.categoria;
                formEditar.querySelector('#edit-marca').value = this.dataset.marca;
                formEditar.querySelector('#edit-descripcion').value = this.dataset.descripcion;

                // Configurar la acción del formulario con el ID de la moto
                formEditar.action = `/motos/${this.dataset.id}`;

                // Mostrar el formulario y el fondo gris
                formEditar.classList.remove('visually-hidden');
                pantallaGris.classList.remove('visually-hidden');
            });
        });

        // Ocultar el formulario y el fondo gris al cancelar
        cancelarBtn.addEventListener('click', function () {
            formEditar.classList.add('visually-hidden');
            pantallaGris.classList.add('visually-hidden');
        });
    });
