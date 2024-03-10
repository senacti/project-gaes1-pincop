<link rel="stylesheet" href="{{ asset('css/inventario.css') }}">  
  <!-- Modal -->
  <div class="modal fade" id="edit{{$marketing->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Marketing</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('marketing.update',$marketing->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$marketing->nombre}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$marketing->descripcion}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Duración</label>
            <input type="text"
              class="form-control" name="duracion" id="" aria-describedby="helpId" placeholder="" value="{{$marketing->duracion}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Presupuesto</label>
            <input type="text"
              class="form-control" name="presupuesto" id="" aria-describedby="helpId" placeholder="" value="{{$marketing->presupuesto}}">
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
    <div class="modal fade" id="delete{{$marketing->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Marketing</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('marketing.destroy',$marketing->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
            <div class="modal-body">
              <div class="mb-3">
                Estás seguro de eliminar a <strong> {{$marketing->nombre}} ?</strong>
            </div>
            <div class="modal-footer">
              <button type="button" class="eliminar" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="nuevo">Confirmar</button>
            </div>
        </form>
          </div>
        </div>
      </div>