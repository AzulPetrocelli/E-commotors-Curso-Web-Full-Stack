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

        <a href="{{url('accion-moto')}}" class="boton-principal w-100 text-center fs-2 show">Motos</a>
        <a href="{{url('accion-accesorio')}}" class="boton-principal w-100 text-center fs-2 show">Accesorios</a>
        <a href="{{url('accion-repuesto')}}" class="boton-principal w-100 text-center fs-2 show">Repuestos</a>
        <a href="{{url('accion-mensaje')}}" class="boton-principal w-100 text-center fs-2 show">Mensajes</a>

    </form>

    <footer>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </footer>
</body>
</html>
