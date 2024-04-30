<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de PQRS</title>
</head>
<body>
    <div class="container">
        <h1>Listado de PQRS</h1>
        <a href="{{ route('pqrs.create') }}" class="btn btn-success">Agregar Nueva PQRS</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pqrs as $pqr)
                <tr>
                    <th scope="row">{{ $pqr->id }}</th>
                    <td>{{ $pqr->cliente->nombre }}</td>
                    <td>{{ $pqr->tipo }}</td>
                    <td>{{ $pqr->descripcion }}</td>
                    <td>{{ $pqr->fecha->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('pqrs.edit', $pqr->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('pqrs.destroy', $pqr->id) }}" method="POST" style="display: inline-block;">
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
