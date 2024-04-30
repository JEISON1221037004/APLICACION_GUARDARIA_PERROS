<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agregar Nuevo Empleado</title>
</head>
<body>
    <div class="container">
        <h1>Agregar Nuevo Empleado</h1>
        <form method="POST" action="{{ route('empleados.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo del empleado" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de teléfono" required>
            </div>
            <div class="mb-3">
                <label for="email" the form-label>Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="mb-3">
                <label for="fecha_contratacion" class="form-label">Fecha de Contratación</label>
                <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salario</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salario" placeholder="Salario del empleado" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('empleados.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
