<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva bodega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main class="container py-4">
    <h1 class="mb-3">Nuevo vehículo</h1>

    <form method="POST" action="{{ route('vehicles.store') }}">
        @csrf
        <div class="mb-3">
            <label for="plate_number" class="form-label">Placa</label>
            <input id="plate_number" name="plate_number" class="form-control @error('plate_number') is-invalid @enderror"
                   value="{{ old('plate_number') }}" required minlength="3" maxlength="255">
            @error('plate_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input id="brand" name="brand" class="form-control @error('brand') is-invalid @enderror"
                   value="{{ old('brand') }}" required maxlength="100">
            @error('brand') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Modelo</label>
            <input id="model" name="model" class="form-control @error('model') is-invalid @enderror"
                   value="{{ old('model') }}" required maxlength="100">
            @error('model') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="vehicle_type" class="form-label">Tipo de vehículo</label>
            <input id="vehicle_type" name="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror"
                   value="{{ old('vehicle_type') }}" required maxlength="100">
            @error('vehicle_type') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input id="color" name="color" class="form-control @error('color') is-invalid @enderror"
                   value="{{ old('color') }}" required maxlength="50">
            @error('color') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacidad</label>
            <input id="capacity" name="capacity" class="form-control @error('capacity') is-invalid @enderror"
                   value="{{ old('capacity') }}" required type="number" min="0">
            @error('capacity') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="daily_rate" class="form-label">Tarifa diaria</label>
            <input id="daily_rate" name="daily_rate" class="form-control @error('daily_rate') is-invalid @enderror"
                   value="{{ old('daily_rate') }}" required type="number" min("0") step("0.01")>
            @error('daily_rate') <div class "invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <button class "btn btn-primary" type "submit">Guardar</button>
        <a class "btn btn-secondary" href "{{ route('vehicles.index') }}">Cancelar</a>
    </form>
</main>
</body>
</html>
