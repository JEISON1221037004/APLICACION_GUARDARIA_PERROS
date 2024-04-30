<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Carnet de Vacunas</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Carnet de Vacunas</h1>
        <a href="{{ route('carnet_vacunas.create') }}" class="btn btn-success">Agregar Nueva Vacuna</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Perro</th>
                    <th scope="col">Vacuna</th>
                    <th scope="col">Fecha de Aplicación</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carnet_vacunas as $carnet)
                <tr>
                    <th scope="row">{{ $carnet->id }}</th>
                    <td>{{ $carnet->perro->nombre }}</td>
                    <td>{{ $carnet->vacuna }}</td>
                    <td>{{ $carnet->fecha_aplicacion->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('carnet_vacunas.edit', $carnet->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('carnet_vacunas.destroy', $carnet->id) }}" method="POST" style="display: inline-block;">
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
