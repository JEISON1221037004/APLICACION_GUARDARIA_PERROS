<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Carnet de Vacunas</title>
</head>
<body>
    <div class="container">
        <h1>Editar Carnet de Vacunas</h1>
        <form method="POST" action="{{ route('carnet_vacunas.update', $carnet->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="vacuna" class="form-label">Vacuna</label>
                <input type="text" class="form-control" id="vacuna" name="vacuna" value="{{ $carnet->vacuna }}" required>
            </div>
            <div class="mb-3">
                <label for="fecha_aplicacion" class="form-label">Fecha de Aplicación</label>
                <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" value="{{ $carnet->fecha_aplicacion->format('Y-m-d') }}" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('carnet_vacunas.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
