<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Perros</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Perros</h1>
        <a href="{{ route('perros.create') }}" class="btn btn-success">Agregar Nuevo Perro</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perros as $perro)
                <tr>
                    <th scope="row">{{ $perro->id }}</th>
                    <td>{{ $perro->nombre }}</td>
                    <td>{{ $perro->raza }}</td>
                    <td>
                        <a href="{{ route('perros.edit', $perro->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('perros.destroy', $perro->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
