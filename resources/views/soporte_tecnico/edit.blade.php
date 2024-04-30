<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Soporte Técnico</title>
</head>
<body>
    <div class="container">
        <h1>Editar Soporte Técnico</h1>
        <form method="POST" action="{{ route('soporte_tecnico.update', $soporte->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $soporte->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
                <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" value="{{ $soporte->fecha_solicitud->format('Y-m-d') }}" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="Pendiente" {{ $soporte->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="En proceso" {{ $soporte->estado == 'En proceso' ? 'selected' : '' }}>En proceso</option>
                    <option value="Completado" {{ $soporte->estado == 'Completado' ? 'selected' : '' }}>Completado</option>
                </select>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('soporte_tecnico.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
