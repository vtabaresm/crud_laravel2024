<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="container text-center">
        <form action="{{route('productos.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:
                    <input type="text" id="nom" name="nombre" class="form-control" require>
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
</body>
</html>