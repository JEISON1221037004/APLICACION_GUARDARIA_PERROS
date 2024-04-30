<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Perro</title>
</head>
<body>
    <div class="container">
        <h1>Editar Perro</h1>
        <form method="POST" action="{{ route('perros.update', $perro->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $perro->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="raza" class="form-label">Raza</label>
                <input type="text" class="form-control" id="raza" name="raza" value="{{ $perro->raza }}" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('perros.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
