<!doctype html>
<html lang="en">

<head>
  <title>Reporte Inventario - TenisPincop</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
  }

  h2 {
    font-size: 24px;
    width: 10px;   
    height: 10px;
  }

  h1 {
    font-size: 32px;
    text-align: center;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  th, td {
    padding: 8px;
	text-align: center ;
    border-bottom: 1px solid #ddd;
  }

  .cabecera th {
    background-color: #9a1212;
    color: white;
    font-weight: bold;
  }

  .bg-light {
    background-color: #f8f9fa;
  }

  .text-black {
    color: #333;
  }
</style>

</head>

<body>
    <h2>Pincop</h2>
    <br>
    <h1>Inventario</h1>
    <br><br>
    <table class="table">
        <thead class="cabecera">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Talla</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr class="bg-light text-black">
                <td scope="row"> {{$producto->id}} </td>
                <td> {{$producto->nombre}} </td>
                <td> {{$producto->marca}} </td>
                <td> {{$producto->talla}} </td>
                <td> {{$producto->cantidad}} </td>
                <td> {{$producto->categoria}} </td>
                <td> {{$producto->descripcion}} </td>
                <td> ${{$producto->precio}} </td>
            </tr>
            @include('producto.info')
            @endforeach
        </tbody>
    </table>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>