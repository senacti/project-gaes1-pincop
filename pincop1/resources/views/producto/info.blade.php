<link rel="stylesheet" href="{{ asset('css/inventario.css') }}">  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('inventario.update',$producto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$producto->nombre}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input type="text"
              class="form-control" name="marca" id="" aria-describedby="helpId" placeholder="" value="{{$producto->marca}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Talla</label>
            <input type="text"
              class="form-control" name="talla" id="" aria-describedby="helpId" placeholder="" value="{{$producto->talla}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text"
              class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$producto->cantidad}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input type="text"
              class="form-control" name="categoria" id="" aria-describedby="helpId" placeholder="" value="{{$producto->categoria}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$producto->descripcion}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text"
              class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$producto->precio}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="eliminar" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="nuevo">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>











    <!-- Modal -->
    <div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('inventario.destroy',$producto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
            <div class="modal-body">
              <div class="mb-3">
                Estás seguro de eliminar a <strong> {{$producto->nombre}} ?</strong>
            </div>
            <div class="modal-footer">
              <button type="button" class="eliminar" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="nuevo">Confirmar</button>
            </div>
        </form>
          </div>
        </div>
      </div>