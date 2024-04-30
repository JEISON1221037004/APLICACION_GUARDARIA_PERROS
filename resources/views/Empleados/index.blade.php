<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Empleados</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-success">Agregar Nuevo Empleado</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha de Contratación</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                <tr>
                    <th scope="row">{{ $empleado->id }}</th>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->fecha_contratacion->format('d/m/Y') }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline-block;">
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
