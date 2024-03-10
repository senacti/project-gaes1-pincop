<link rel="stylesheet" href="{{ asset('css/inventario.css') }}">

<!-- Modal -->
<div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR PEDIDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('cliente.update',$cliente->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
      <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">NOMBRE</label>
          <input type="text"
              class="form-control form-control-sm" name="nombre" id="" aria-describedby="helpid" placeholder=""value="{{$cliente->nombre}}">
           </div>

           <div class="mb-3">
          <label for="" class="form-label">TELEFONO</label>
          <input type="text"
              class="form-control form-control-sm" name="telefono" id="" aria-describedby="helpid" placeholder=""value="{{$cliente->telefono}}">
           </div>

          <div class="mb-3">
          <label for="" class="form-label">CORREO</label>
          <input type="email"
              class="form-control form-control-sm" name="correo" id="" aria-describedby="helpid" placeholder=""value="{{$cliente->correo}}">
           </div>

           <div class="mb-3">
            <label for="" class="form-label">DIRECCIÓN</label>
            <input type="text"
                class="form-control form-control-sm" name="direccion" id="" aria-describedby="helpid" placeholder=""value="{{$cliente->direccion}}">
             </div>

             <div class="mb-3">
              <label for="" class="form-label">Estado</label>
              <input type="text"
                  class="form-control form-control-sm" name="estado" id="" aria-describedby="helpid" placeholder=""value="{{$cliente->estado}}">
               </div>
           
        </div>
      <div class="modal-footer">
        <button type="button" class="eliminar" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="nuevo">Guardar</button>
      </div>
      </form>
     </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR PEDIDO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('cliente.destroy',$cliente->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('DELETE')
      <div class="modal-body">
       Estas seguro de elimar a <strong>{{$cliente->nombre}} ?</strong>
        </div>
      <div class="modal-footer">
        <button type="button" class="eliminar" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="nuevo">Confirmar</button>
      </div>
      </form>
     </div>
  </div>
</div>
