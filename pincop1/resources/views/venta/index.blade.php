@extends('venta')


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
        <h1>Ventas</h1>
        <br><br>
        <button type="button" class="nuevo" data-toggle="modal" data-target="#create">
            <i class="fas fa-plus"></i> Nuevo
          </button>
          <a href="{{route('venta.pdf')}}" class="pdf" target="_blank">
            <i class="fas fa-file-pdf"></i> PDF
          </a>          
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="cabezera">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                    <tr class="bg-light text-black">
                        <td scope="row"> {{$venta->id}} </td>
                        <td> {{$venta->nombre}} </td>
                        <td> {{$venta->descripcion}} </td>
                        <td> {{$venta->cantidad}} </td>
                        <td> {{$venta->total}} </td>
                        <td>
                            <button type="button" class="editar" data-toggle="modal" data-target="#edit{{$venta->id}}">
                                <i class="fas fa-edit"></i>
                              </button>
                            <button type="button" class="eliminar" data-toggle="modal" data-target="#delete{{$venta->id}}">
                                <i class="fas fa-trash"></i>
                              </button>
                        </td>
                    </tr>
                    @include('venta.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('venta.create')
    </div>
    <div class="col-md-2"></div>
</div>
@endsection