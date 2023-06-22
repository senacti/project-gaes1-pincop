<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inventario - TenisPincop</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inventario.css') }}">
    <link rel="icon" href= {{ asset('img/logo.png') }}>
</head>
<body>
    <header>
        <div class="container">
            <h2><a class="logo" href="{{url('/home')}}"><< Dashboard</a></h2>
            <h1>Inventario</h1>
        </div>
    
    <div class="contenedor">

        <div class="div-formulario">
            <h2>Productos</h2>

            <form action="#" id="formulario">
                <input type="text" id="marca" placeholder="Ingresa Marca">
                <input type="number" id="talla" placeholder="Ingresa Talla">
                <input type="number" id="cantidad" placeholder="Ingresa Cantidad">
                <input type="number" id="precio" placeholder="Ingresa Precio">
                <input type="text" id="categoria" placeholder="Ingresa Categoría">
                <button type="submit" id="btnAgregar">Agregar</button>
            </form>
        </div>

        <div class="div-listado">
            <h2>Listado Productos</h2>
            <div class="div-productos">
                
            </div>
        </div>

    </div>
</header>
    <script  src={{ asset('js/inventario.js') }}></script>
</body>
</html>