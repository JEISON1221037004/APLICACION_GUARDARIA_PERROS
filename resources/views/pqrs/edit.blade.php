<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar PQRS</title>
</head>
<body>
    <div class="container">
        <h1>Editar PQRS</h1>
        <form method="POST" action="{{ route('pqrs.update', $pqr->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select class="form-control" id="tipo" name="tipo">
                    <option value="Petición" {{ $pqr->tipo == 'Petición' ? 'selected' : '' }}>Petición</option>
                    <option value="Queja" {{ $pqr->tipo == 'Queja' ? 'selected' : '' }}>Queja</option>
                    <option value="Reclamo" {{ $pqr->tipo == 'Reclamo' ? 'selected' : '' }}>Reclamo</option>
                    <option value="Sugerencia" {{ $pqr->tipo == 'Sugerencia' ? 'selected' : '' }}>Sugerencia</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $pqr->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $pqr->fecha->format('Y-m-d') }}" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('pqrs.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
