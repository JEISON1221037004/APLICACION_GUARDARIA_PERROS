<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Reserva</title>
</head>
<body>
    <div class="container">
        <h1>Editar Reserva</h1>
        <form method="POST" action="{{ route('reservas.update', $reserva->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $reserva->fecha_inicio->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ $reserva->fecha_fin->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3">
                <label for="tipo_servicio" class="form-label">Tipo de Servicio</label>
                <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" value="{{ $reserva->tipo_servicio }}" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('reservas.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
