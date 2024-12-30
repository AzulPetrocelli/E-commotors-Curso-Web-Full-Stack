var pantallaGris = document.querySelector('.pantalla-gris');

// Función para mostrar/ocultar aside y manejar el fondo gris
const mostrarOcultar = (referencia) => {
    var contenedorAside = document.querySelector(referencia);

    if (contenedorAside.classList.contains("visually-hidden")) {
        contenedorAside.classList.remove("visually-hidden");
        pantallaGris.classList.add('fondo-gris');
    } else {
        contenedorAside.classList.add("visually-hidden");
        pantallaGris.classList.remove('fondo-gris');
    }
};

// Botón "Filtrar" para mostrar el aside
var botonFiltrar = document.querySelectorAll(".show");
botonFiltrar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar(".container-show"));
});

// Botón "Agregar Producto" para mostrar el formulario de agregar
var botonAgregarProducto = document.querySelectorAll("#agregar-producto, .show");
botonAgregarProducto.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar("#form-agregar-producto"));
});

// Botón "Eliminar Producto" para mostrar el mensaje de confirmación
var botonEliminar = document.querySelectorAll(".eliminar");
botonEliminar.forEach(boton => {
    boton.addEventListener("click", () => mostrarOcultar(".confirmacion"));
});

// Para cerrar el filtro sin realizar ninguna acción (botón "Salir")
document.addEventListener('DOMContentLoaded', () => {
    const closeButton = document.querySelector('.salir');
    const asideElement = document.getElementById('filter-sidebar');

    closeButton.addEventListener('click', () => {
        asideElement.classList.add('visually-hidden');
        pantallaGris.classList.remove('fondo-gris'); // Asegúrate de quitar el fondo gris
    });
});

// METODO UPDATE (Formulario de edición)
document.addEventListener('DOMContentLoaded', function () {
    const editarBtns = document.querySelectorAll('.editar-moto');
    const formEditar = document.querySelector('#form-editar-producto');
    const cancelarBtn = formEditar.querySelector('.cancelar');

    editarBtns.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault();

            // Rellenar el formulario con los datos del producto
            formEditar.querySelector('#edit-id-moto').value = this.dataset.id;
            formEditar.querySelector('#edit-nombre').value = this.dataset.nombre;
            formEditar.querySelector('#edit-estado').value = this.dataset.estado;
            formEditar.querySelector('#edit-precio').value = this.dataset.precio;
            formEditar.querySelector('#edit-categoria').value = this.dataset.categoria;
            formEditar.querySelector('#edit-marca').value = this.dataset.marca;
            formEditar.querySelector('#edit-descripcion').value = this.dataset.descripcion;

            // Configurar la acción del formulario con el ID
            formEditar.action = `/motos/${this.dataset.id}`;

            // Mostrar el formulario y el fondo gris
            formEditar.classList.remove('visually-hidden');
            pantallaGris.classList.add('fondo-gris');
        });
    });

    // Ocultar el formulario y el fondo gris al cancelar
    cancelarBtn.addEventListener('click', function () {
        formEditar.classList.add('visually-hidden');
        pantallaGris.classList.remove('fondo-gris');
    });
});
