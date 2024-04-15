@include('partials.header')
    <div class="container text-center">
        <a href="{{ route('productos.create') }}">
            <button class="btn btn-success btn-block">
                Crear
            </button>
        </a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>                      
                    <td>
                        <a href="{{route('productos.edit',$product->id)}}" class="btn btn-primary">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <form action="{{ route('productos.destroy',$product->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@include('partials.footer')