<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Soporte Técnico</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Soporte Técnico</h1>
        <a href="{{ route('soporte_tecnico.create') }}" class="btn btn-success">Agregar Nuevo Soporte</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha de Solicitud</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soportes as $soporte)
                <tr>
                    <th scope="row">{{ $soporte->id }}</th>
                    <td>{{ $soporte->empleado ? $soporte->empleado->nombre : 'Sin asignar' }}</td>
                    <td>{{ $soporte->descripcion }}</td>
                    <td>{{ $soporte->fecha_solicitud->format('d/m/Y') }}</td>
                    <td>{{ $soporte->estado }}</td>
                    <td>
                        <a href="{{ route('soporte_tecnico.edit', $soporte->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('soporte_tecnico.destroy', $soporte->id) }}" method="POST" style="display: inline-block;">
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
