<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Reservas</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Reservas</h1>
        <a href="{{ route('reservas.create') }}" class="btn btn-success">Agregar Nueva Reserva</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Perro</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Fecha Inicio</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Tipo de Servicio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                <tr>
                    <th scope="row">{{ $reserva->id }}</th>
                    <td>{{ $reserva->cliente->nombre }}</td>
                    <td>{{ $reserva->perro->nombre }}</td>
                    <td>{{ $reserva->empleado ? $reserva->empleado->nombre : 'Sin asignar' }}</td>
                    <td>{{ $reserva->fecha_inicio->format('d/m/Y') }}</td>
                    <td>{{ $reserva->fecha_fin->format('d/m/Y') }}</td>
                    <td>{{ $reserva->tipo_servicio }}</td>
                    <td>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display: inline-block;">
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
