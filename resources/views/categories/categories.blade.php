<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estiloindex.css">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: whitesmoke;
        }
    </style>

    <h1>Categorias</h1>
    <br>
    <div class="row">
        <div class="col-3">
            <form action="{{route('categories.store')}}" method="post">
                @csrf
                <label for="name"><strong>Nombre:</strong></label>
                <input type="text" class="form-control" name="name" id="name">
                <br>
                <label for="nationality"><strong>Descripcion:</strong></label>
                <input type="text" class="form-control" name="nationality" id="nationality">
                <br>
                <button type="submit">Guardar</button>
            </form>
        </div>
       <br>
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Borrar</th>
                    <th scope="col">Modificar</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($product as $products)
                <tr>
                    <td><strong>{{ $product->id }}</strong></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                    <form action="{{ route('categories.destroy', $categories->id) }}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este autor?');">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                    <td>
                        <form action="{{ route('categories.edit',$categories->id)}}">
                            @csrf
                            @method('edit')
                            <button type="submit">Editar</button>

                        </form>
                    </td>
                    </td>
                    <td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
