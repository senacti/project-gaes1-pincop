<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - TenisPincop</title> 
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>  

<body>
    <header>
        <div class="container">
            <h2><a class="logo" href="{{url('/')}}">Pincop</a></h2>
        </div>
        <form class="formulario" method="POST" action="{{ route('login') }}">
            @csrf <!-- Agrega el token CSRF para protección -->
    
            <h1>Iniciar Sesión</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Correo Electronico" id="correo" name="email">
                </div>
                 
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" id="contraseña" name="password">
                </div>
                 
                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>
                
                <input type="submit" value="Ingresar" class="button"> <!-- Cambia el tipo de botón a "submit" -->
                <p>¿No tienes una cuenta? <a class="link" href="{{url('/register')}}">Registrate </a></p>
                <p><a class="link" href="{{url('/recuperar')}}">¿Olvidaste tu contraseña?</a></p>
            </div>
        </form>
    </header>
    <script  src="{{ asset('js/login.js') }}"></script>
</body>
</html>