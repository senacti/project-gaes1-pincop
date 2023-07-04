<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Administrador - TenisPincop</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href= {{ asset('img/logo.png') }}>
    <script src="https://kit.fontawesome.com/ea1a71fcbb.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="menu-lat">
        <div class="marca">
            <a href="{{url('/')}}"><h2>Pincop</h2></a>
        </div>
        <ul>
            <a href="{{url('/404d')}}"><li><i class="fa-sharp fa-solid fa-bars icon"></i>&nbsp; <span>Menu</span></li></a>
            <a href="{{url('/inventario')}}"><li><i class="fa-solid fa-pager icon"></i>&nbsp; <span>Inventario</span></li></a>
            <a href="{{url('/404d')}}"><li><i class="fa-solid fa-chart-line icon"></i>&nbsp; <span>Marketing</span></li></a>
            <a href="{{url('/cliente')}}"><li><i class="fa-solid fa-truck-fast"></i>&nbsp; <span>Pedidos</span></li></a>
            <a href="{{url('/404d')}}"><li><i class="fa-solid fa-sack-dollar"></i>&nbsp; <span>Ventas</span></li></a>
            <a href="{{url('/404d')}}"><li><i class="fa-solid fa-user icon"></i>&nbsp; <span>Usuarios</span></li></a>
            <a href="{{url('/404d')}}"><li><i class="fa-solid fa-gear icon"></i>&nbsp; <span>Ajustes</span></li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placehokders="Buscar">
                    <a href="{{url('/500d')}}"><button type="submit"><i class="fas fas fa-search"></i></button></a>
                </div>
                <div class="usuario">
                    <i class="fa-solid fa-user" style="cursor:not-allowed"></i>
                    <i class="fa-solid fa-bell" style="cursor:not-allowed"></i>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <b><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></b>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>12136</h1>
                        <h3>Ventas</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-sack-dollar" style="cursor:not-allowed"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2136</h1>
                        <h3>Pedidos </h3>
                        <h3>en Proceso</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-truck-fast" style="cursor:not-allowed"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>35621</h1>
                        <h3>Usuarios</h3>
                    </div>
                    <div class="icon-case">
                        <i class="fa-solid fa-user icon" style="cursor:not-allowed"></i>
                    </div>
                </div>
            </div>

            <div class="cards">
             <div class="recent-payment">
                <div class="title">
                    <b>Pagos Recientes</b>
                    <a href="{{url('/404d')}}" class="btn">Ver Todos</a>
             </div>
                <table>
                    <tr>
                        <th>Radicado</th>
                        <th>Producto</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                    </tr>
                    <tr>
                        <td>44892</td>
                        <td>Jordan Retro 1 High (Rojas)</td>
                        <td>129.990$ COP</td>
                        <td>23/03/2023</td>
                    </tr>
                </table>
             </div>

             <div class="nuevo-pedido">
                <div class="title">
                    <b>Pedidos Recientes</b>
                    <a href="{{url('/404d')}}" class="btn">Ver Todos</a>
             </div>
             <table>
                <tr>
                    <th>Radicado</th>
                    <th>Pedido</th>
                    <th>Dirección</th>
                </tr>
                <tr>
                    <td>78923</td>
                    <td>Jordan Retro 1 High (Rojas)</td>
                    <td>Cr 87 #65-81B</td>
                    <td><a href="{{url('/404d')}}" class="btn1"><i class="fa-solid fa-circle-info"></i></a></td>
                </tr>
                </table>
            </div>
            <div class="marketing">
            <div class="title">
                    <b>Marketing</b>
                    <a href="{{url('/404d')}}" class="btn">Ver Todos</a>
             </div>
             <table>
                <tr>
                    <th>Campaña</th>
                    <th>Resultados</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Terminado</th>
                </tr>
                <tr>
                    <td>#56972</td>
                    <td>23,131 interesados</td>
                    <td>02/02/2023</td>     
                    <td>21/06/2023</td>
                    <td><a href="{{url('/404d')}}" class="btn1"><i class="fa-solid fa-circle-info"></i></a></td>
                </tr>
            </table>
             </div>
            </div>
        </div>
    </div>
</body>
</html>