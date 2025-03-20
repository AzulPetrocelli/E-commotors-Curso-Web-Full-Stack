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

//ELIMINAR MOTO
document.addEventListener('DOMContentLoaded', function () {
    const confirmarBtns = document.querySelectorAll('.confirmar-eliminacion');
    const confirmacionAside = document.querySelector('.confirmacion');
    const formEliminar = document.querySelector('#form-confirmar-eliminar');
    const nombreMotoSpan = document.querySelector('#nombre-moto'); // Span para el nombre de la moto

    confirmarBtns.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault();

            const motoId = this.dataset.id; // Obtener ID del producto
            const motoNombre = this.dataset.nombre; // Obtener el nombre del producto

            // Actualizar el mensaje con el nombre del producto
            nombreMotoSpan.textContent = motoNombre;

            // Configurar la acción del formulario para enviar la solicitud DELETE
            formEliminar.setAttribute('action', `/motos/${motoId}`);

            // Mostrar el aside de confirmación
            confirmacionAside.classList.remove('visually-hidden');
            pantallaGris.classList.add('fondo-gris');
        });
    });

    // Ocultar el aside de confirmación al hacer clic en "Cancelar"
    const cancelarBtn = document.querySelector('.cancelar');
    cancelarBtn.addEventListener('click', function () {
        confirmacionAside.classList.add('visually-hidden');
        pantallaGris.classList.remove('fondo-gris');
    });
});

//ELIMINAR ACCESORIO
document.addEventListener('DOMContentLoaded', function () {
    const confirmarBtns = document.querySelectorAll('.confirmar-eliminacion'); // Botones de eliminación
    const confirmacionAside = document.querySelector('.confirmacion'); // Aside de confirmación
    const formEliminar = document.querySelector('#form-confirmar-eliminar'); // Formulario dentro del aside
    const nombreAccesorioSpan = document.querySelector('#nombre-accesorio'); // Span para mostrar el nombre del accesorio

    confirmarBtns.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault();

            const accesorioId = this.dataset.id; // Obtener ID del accesorio
            const accesorioNombre = this.dataset.nombre; // Obtener nombre del accesorio

            // Actualizar el mensaje con el nombre del accesorio
            nombreAccesorioSpan.textContent = accesorioNombre;

            // Configurar la acción del formulario para la solicitud DELETE
            formEliminar.setAttribute('action', `/accesorios/${accesorioId}`);

            // Mostrar el aside de confirmación
            confirmacionAside.classList.remove('visually-hidden');
            pantallaGris.classList.add('fondo-gris');
        });
    });

    // Botón de cancelar la eliminación
    const cancelarBtn = document.querySelector('.cancelar');
    cancelarBtn.addEventListener('click', function () {
        confirmacionAside.classList.add('visually-hidden');
        pantallaGris.classList.remove('fondo-gris');
    });
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

// METODO UPDATE MOTOS
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

// METODO UPDATE ACCESORIOS
document.addEventListener('DOMContentLoaded', function () {
    const editarBtns = document.querySelectorAll('.editar-accesorio'); // Botones de edición
    const formEditar = document.querySelector('#form-editar-producto'); // Formulario de edición
    const cancelarBtn = formEditar.querySelector('.cancelar'); // Botón de cancelar
    const pantallaGris = document.querySelector('.pantalla-gris'); // Fondo gris

    editarBtns.forEach(boton => {
        boton.addEventListener('click', function (e) {
            e.preventDefault();

            // Rellenar el formulario con los datos del accesorio
            formEditar.querySelector('#edit-id-accesorio').value = this.dataset.id;
            formEditar.querySelector('#edit-nombre').value = this.dataset.nombre;
            formEditar.querySelector('#edit-precio').value = this.dataset.precio;
            formEditar.querySelector('#edit-tipo').value = this.dataset.categoria;
            formEditar.querySelector('#edit-descripcion').value = this.dataset.descripcion;

            // Configurar la acción del formulario con el ID del accesorio
            formEditar.action = `/accesorios/${this.dataset.id}`;

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


// Ocultar el aside al hacer clic en el botón "Cancelar"
document.addEventListener('DOMContentLoaded', () => {
    const cancelarBtn = document.querySelector('.salir'); // Botón "Cancelar"
    const confirmacionAside = document.querySelector('.confirmacion'); // El aside de confirmación
    const pantallaGris = document.querySelector('.pantalla-gris'); // Fondo gris

    cancelarBtn.addEventListener('click', () => {
        confirmacionAside.classList.add('visually-hidden'); // Oculta el aside
        pantallaGris.classList.remove('fondo-gris'); // Quita el fondo gris
    });
})

var botonComprar = document.getElementById("Comprar")
botonComprar.addEventListener("click", () =>  mostrarOcultar(".container-compra"));
