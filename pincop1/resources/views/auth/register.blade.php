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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="password_confirmation">Repetir Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit">Enviar</button>
			<p>¿Ya tienes una cuenta?<a class="link" href="{{url('/login')}}"> Iniciar Sesión</a></p>
        </form>
    </main>
</header>
    <script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>

