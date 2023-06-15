<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>TenisPincop</title>
    <link rel="icon" href= {{ asset('img/logo.png') }}>
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div>
                    <h2 class="logo">
                        <a href="{{url('/')}}">Pincop</a>
                    </h2>
                    <div class="menu">
                        <ul><!--hacemos una lista no ordenada que tenga dentro una lista ordenada-->
                            <li>
                                <a href="{{url('/nuevo')}}">Nuevos lanzamientos</a>
                            </li>
                            <li>
                                <a href="{{url('/hombre')}}">Hombre</a>
                            </li>
                            <li>
                                <a href="{{url('/mujer')}}">Mujer</a>
                            </li>
                            <li>
                                <a href="{{url('/nino')}}">Niños</a>
                            </li>
                        </ul>
                        <form>
                            <div class="search-icon">
                                <i class="fas fa-search"></i><!--icono de lupa-->
                            </div>
                            <!--sirve para poder colocar la barra de busqueda-->
                            <input type="text" class="buscar" placeholder="Buscar..."><!--lo que va por dentro de la barra de busqueda-->
                            <a href="{{url('/500')}}" class="nav-btn"><i class="fas fa-cart-plus"></i></a><!--icono del carrito de compras-->
                            <a href="{{url('/inicio')}}" class="nav-btun"><i class="fa-solid fa-user"></i></a><!--icono de Usuario-->
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="body">
            <div>
                <h4>$130.000</h4>
                <h1>New Air Jordan 1 High OG</h1>
                <div class="rating">
                    <!--iconos de las estrellitas-->
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <!--ejemplo de texto-->
                <p>Air Jordan, excelente calidad, réplica AAA.</p>
                <a href="{{url('/500')}}" class="btn">Añadir al carrito</a>
            </div>
            <div>
                <!--imagen del zapato-->
                <img src="{{ asset ('img/jordan.png') }}" alt="New Air Jordan 1 High OG">
            </div>
        </div>

        <div class="footer">
            <div class="social">
                <!--logos de las redes sociales-->
                <a href="{{url('/404')}}"><i class="fab fa-facebook"></i></a>
                <a href="{{url('/404')}}"><i class="fab fa-instagram"></i></a>
                <a href="{{url('/404')}}"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="watch">
                <a href="{{url('/404')}}" class="play-icon"><i class="fas fa-play"></i></a><!--icono de play-->
                <h3>Vista previa</h3>
            </div>
        </div>
    </header>
</body>
</html>
