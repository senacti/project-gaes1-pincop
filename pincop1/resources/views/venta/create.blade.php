<link rel="stylesheet" href="{{ asset('css/inventario.css') }}">
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Venta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('venta.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text"
              class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Total</label>
            <input type="text"
              class="form-control" name="total" id="" aria-describedby="helpId" placeholder="">
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