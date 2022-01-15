<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Productos</title>
</head>

<body>
    <h1>lista de productos</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>

                <th>id</th>
                <th>nombre</th>
                <th>precio</th>
                <th>cantidad</th>



            </tr>
        </thead>

        <tbody>
            @foreach ($productos as $producto)

            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->cantidad }}</td>
                {{-- <td>
                    <a href="{{ url('/productos/'.$producto->id.'/edit') }}">
                        Editar
                    </a>
                    <form action="{{ url('/productos/'.$producto->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" onclick="return confirm('Seguro que quieres borrar?')">Borrar</button>
                    </form>
                </td> --}}

            </tr>

            @endforeach
        </tbody>

    </table>
</body>

</html>
