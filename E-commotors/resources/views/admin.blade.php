<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Estilos Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--Tipografia-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Varela+Round&display=swap" rel="stylesheet">

    <!--ICONOS-->
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!--Estilos CSS-->
    <link rel="stylesheet" href="css/main.css">
    <title>Administracion</title>
</head>
<body>

    <form action="" class="form-welcome w-25 position-absolute top-50 start-50 translate-middle">
        <h3 class="jaro fs-1  mb-4">Menu Principal</h3>

        <a href="#" class="boton-principal w-100 text-center fs-2 filtrar">Motos</a>
        <a href="#" class="boton-principal w-100 text-center fs-2 filtrar">Repuestos</a>
        <a href="#" class="boton-principal w-100 text-center fs-2 filtrar">Accesorios</a>
        <a href="#" class="boton-principal w-100 text-center fs-2 filtrar">Mensajes</a>

    </form>


    <aside class="filter-sidebar aside-oculto position-fixed top-50 start-50 translate-middle" style="min-width: 300px; width: 90%;">
        <table class="table">

            <div class="d-flex justify-content-end gap-2 position-sticky">
                <a href="" class="boton-principal filtrar">Salir</a>
                <a href="#" class="boton-principal">Agregar Producto</a>
            </div>

            <thead>
              <tr>
                <!--ACA VAN LOS CAMPOS DE LA TABLA-->
                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Modelo</th>
                <th scope="col">Color</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Opciones</th>

              </tr>
            </thead>
            <tbody>
              <tr class="my-2">
                <!--ACA VA UN WHILE CON LOS VALORES DE LOS CAMPOS-->
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td class="d-flex flex-nowrap gap-2">
                    <a href="#"><i class="las la-times-circle text-danger fs-2"></i></a>
                    <a href="#"><i class="las la-edit text-danger fs-2"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
    </aside>

    <!--FALTA TERMINAR-->
    <aside class="confirmacion aside-oculto rounded shadow p-4 w-25 position-fixed top-50 start-50 translate-middle bg-white" style="min-width: 300px; z-index:1000">
        <p class="varela fs-2">Esta seguro que desea eliminar el producto?</p>
        <div class="d-flex justify-content-end gap-2">
            <a href="#" class="boton-principal filtrar">Aceptar</a>
            <a href="#" class="boton-principal filtrar">Cancelar</a>
        </div>
    </aside>

    <footer>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </footer>
</body>
</html>
