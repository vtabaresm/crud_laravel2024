@include('partials.header')

    <div class="container text-center">
        <form action="{{route('productos.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:
                    <input type="text" id="nom" name="nombre" class="form-control" onchange="verificar()" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="descri" class="form-label">Descripcion:
                    <input type="text" id="descri" name="descripcion" class="form-control" require>
                </label>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio:
                    <input type="number" id="precio" name="precio" step="any" class="form-control" require>                    
                </label>
            </div>
                <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
        </form>
    </div>

@include('partials.footer')