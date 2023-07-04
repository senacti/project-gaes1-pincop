@extends('cliente')


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
        <h1>Pedidos</h1>
        <br><br>
        <button type="button" class="nuevo" data-toggle="modal" data-target="#create">
            <i class="fas fa-plus"></i> NUEVO
         </button>
         <a href="{{route('inventario.pdf')}}" class="pdf" target="_blank">
            <i class="fas fa-file-pdf"></i> PDF
          </a>  
         

        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="cabezera">
                    <tr>
                        <th scope="col">ID </th>
                        <th scope="col">NOMBRE </th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CORREO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                
                    
                    
                    @foreach($clientes as $cliente)
                    <tr class="bg-light text-black">
                        <td scope="row">{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>
                        <button type="button" class="editar" data-toggle="modal" data-target="#edit{{$cliente->id}}">
                            <i class="fas fa-edit"></i>
                         </button>
                         <button type="button" class="eliminar" data-toggle="modal" data-target="#delete{{$cliente->id}}">
                            <i class="fas fa-trash"></i>
                        </button>
         
                     </td>
                    </tr>
                    @include('cliente.info')
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('cliente.create')
        

    </div>
    <div class="col-md2"></div>
</div>








@endsection








