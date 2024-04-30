<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado de Facturación de Pagos</title>
</head>
<body>
    <div class="container">
        <h1>Listado de Facturación de Pagos</h1>
        <a href="{{ route('facturacion_pagos.create') }}" class="btn btn-success">Agregar Nuevo Pago</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Reserva ID</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facturacion_pagos as $facturacion_pago)
                <tr>
                    <th scope="row">{{ $facturacion_pago->id }}</th>
                    <td>{{ $facturacion_pago->reserva_id }}</td>
                    <td>{{ $facturacion_pago->monto }}</td>
                    <td>{{ $facturacion_pago->fecha->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('facturacion_pagos.edit', $facturacion_pago->id) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('facturacion_pagos.destroy', $facturacion_pago->id) }}" method="POST" style="display: inline-block;">
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
