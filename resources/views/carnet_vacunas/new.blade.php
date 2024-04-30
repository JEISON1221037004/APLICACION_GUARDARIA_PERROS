<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Vacuna al Carnet</title>
</head>
<body>
    <div class="container">
        <h1>Agregar Vacuna al Carnet</h1>
        <form method="POST" action="{{ route('carnet_vacunas.store') }}">
            @csrf
            <div class="mb-3">
                <label for="vacuna" class="form-label">Vacuna</label>
                <input type="text" class="form-control" id="vacuna" name="vacuna" placeholder="Nombre de la vacuna" required>
            </div>
            <div class="mb-3">
                <label for="fecha_aplicacion" class="form-label">Fecha de Aplicación</label>
                <input type="date" class="form-control" id="fecha_aplicacion" name="fecha_aplicacion" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('carnet_vacunas.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
