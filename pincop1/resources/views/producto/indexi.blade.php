@extends('inventario')


@section('content')

<link rel="stylesheet" href="{{ asset('css/inventario.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<br><br>
<div class="container">
    <h3><a class="logo" href="{{url('/home')}}">Dashboard</a></h3>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h1>Inventario</h1>
        <br><br>
        <button type="button" class="nuevo" data-toggle="modal" data-target="#create">
            <i class="fas fa-plus"></i> Nuevo
          </button>
          <a href="{{route('inventario.pdf')}}" class="pdf" target="_blank">
            <i class="fas fa-file-pdf"></i> PDF
          </a>          
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="cabezera">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th>Acciones</th>
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
                        <td>
                            <button type="button" class="editar" data-toggle="modal" data-target="#edit{{$producto->id}}">
                                <i class="fas fa-edit"></i>
                              </button>
                            <button type="button" class="eliminar" data-toggle="modal" data-target="#delete{{$producto->id}}">
                                <i class="fas fa-trash"></i>
                              </button>
                        </td>
                    </tr>
                    @include('producto.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('producto.create')
    </div>
    <div class="col-md-2"></div>
</div>
@endsection