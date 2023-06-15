<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mujer - TenisPincop</title>
    <link rel="stylesheet" href="../css/nuevo.css">
    <link rel="icon" href="../img/tenis ° pin.png">
    <script src="../js/nuevo.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                <a href="{{url('/niño')}}">Niños</a>
                            </li>   
                        </ul>
                            <form>
                                <div class="search-icon">
                                    <i class="fas fas fa-search"></i><!--icono de lupa-->
                                </div>
                                <!--sirve para poder colocar la barra de busqueda-->
                                <input type="text"
                                class="buscar"
                                placeholder="Buscar..."><!--lo que va por dentro de la barra de busqueda-->
                                <a href="{{url('/inicio')}}" class="nav-btn"><i class="fa-solid fa-user"></i></a><!--icono de Usuario-->                               
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <section class="contenedor">
                <!-- Contenedor de elementos -->
                <div class="contenedor-items">
                    <div class="item">
                        <span class="titulo-item">Nike Air Max 270</span>
                        <img src="../img/Productos/air rosado.png" alt="" class="img-item">
                        <span class="precio-item">$150.000</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Nike Blazer Mid '77 Vintage</span>
                        <img src="../img/Productos/nike us.png" alt="" class="img-item">
                        <span class="precio-item">$200.000</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Adidas Grand Court TD</span>
                        <img src="../img/Productos/adm.png" alt="" class="img-item">
                        <span class="precio-item">$180.000</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                    <div class="item">
                        <span class="titulo-item">Adidas Forum 84 Low</span>
                        <img src="../img/Productos/admr.png" alt="" class="img-item">
                        <span class="precio-item">$250.000</span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                </div>
                <!-- Carrito de Compras -->
                <div class="carrito" id="carrito">
                    <div class="header-carrito">
                        <h2>Tu Carrito</h2>
                    </div>
        
                    <div class="carrito-items">
                    </div>

                    <div class="carrito-total">
                        <div class="fila">
                            <strong>Tu Total</strong>
                            <span class="carrito-precio-total">
                                $120.000,00
                            </span>
                        </div>
                        <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
                    </div>
                </div>
            </section>
    </header>
</body>
</html>