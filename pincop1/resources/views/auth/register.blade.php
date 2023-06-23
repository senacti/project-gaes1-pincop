<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - TenisPincop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>
<body>
    <header>
        <div class="container">
            <h2><a class="logo" href="{{url('/')}}">Pincop</a></h2>
        </div>
    <main>
        <h1>Registrate</h1>
        <form method="POST" action="{{ route('register') }}" id="formulario" onsubmit="return validarFormulario()">
            @csrf
            <div class="formulario__grupo" id="grupo__name">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="formulario__grupo" id="grupo__email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="formulario__grupo" id="grupo__password">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="formulario__grupo" id="grupo__password_confirmation">
                <label for="password_confirmation">Repetir Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-times-circle"></i>
            </div>
            <button type="submit">Enviar</button>
            <p>¿Ya tienes una cuenta?<a class="link" href="{{url('/login')}}"> Iniciar Sesión</a></p>
        </form>
    </main>
</header>
    <script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>

