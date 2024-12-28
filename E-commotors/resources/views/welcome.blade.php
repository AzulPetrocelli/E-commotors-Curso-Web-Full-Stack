<!-- USUARIO FUNCIONAL PARA EL LOGIN CON CONTRASEÑA
    AGREGAR EN BASE DE DATOS:
    id: 1,
    nombre: Juan Perez,
    email: juan@example.com,
    email_verified_at: NULL,
    password: $2y$12$pKjj9DnK6vfVTWLaqnioUOR7EaEDoazapX/orjJG6Pkv1Md.xcRCK,
    remeber_token: NULL,
    created_at: 2024-12-27 21:37:03
    updated_at: 2024-12-27 21:37:03

    PARA INGRESAR:
    usuario: juan@example.com,
    contraseña: 123456


-->

<!DOCTYPE html>
<html lang="en">
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

    <title>Welcome</title>
</head>
<body style="background-color:var(--color-primario);">
    <form action="{{ route('login') }}" method="POST" class="form-welcome w-25">
        @csrf <!-- Token CSRF para proteger el formulario -->
        <img src="images/logo.png" alt="Logo E-commotors" class="w-100">
        <label for=""><input type="email" class="input-form" placeholder="Usuario" name="email" id=""></label>
        <label for=""><input type="password" class="input-form" placeholder="Contraseña" name="password" id=""></label>
        <button class="boton-principal w-75">Iniciar Sesion</button>
        <a href="{{ route('/main') }}" class="boton-principal w-75" style="text-align: center">Entrar sin cuenta</a>
    </form>

    <!-- Mostrar el error si las credenciales no coinciden -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <?php
    echo bcrypt('123456');
    ?>

</body>

@include('footer')

