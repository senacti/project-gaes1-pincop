<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - TenisPincop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" href= {{ asset('img/logo.png') }}>
</head>  

<body>
    <header>
        <div class="container">
            <h2><a class="logo" href="{{url('/')}}">Pincop</a></h2>
        </div>
        <form class="formulario">
    
            <h1>Recupera tu cuenta</h1>
            <div class="contenedor">
             
                <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Correo Electronico" id="correo"> 
                    </div>
                     
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                    </div>
                        
                <input type="button" value="Enviar Correo" class="button">
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Correo enviado exitosamente!</p>
                <p><a class="link" href="{{url('/login')}}"> Volver</a></p>
            </div>
        </form>
    </header>
    <script  src={{ asset('js/recuperar.js') }}></script>
</body>
</html>