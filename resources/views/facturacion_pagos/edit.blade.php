<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Facturación de Pago</title>
</head>
<body>
    <div class="container">
        <h1>Editar Facturación de Pago</h1>
        <form method="POST" action="{{ route('facturacion_pagos.update', $facturacion_pago->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="monto" class="form-label">Monto</label>
                <input type="number" class="form-control" id="monto" name="monto" value="{{ $facturacion_pago->monto }}" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $facturacion_pago->fecha->format('Y-m-d') }}" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('facturacion_pagos.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
