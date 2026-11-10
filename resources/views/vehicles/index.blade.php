<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Dos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Placa</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Tipo de vehiculo</th>
      <th scope="col">Color</th>
      <th scope="col">Capacidad</th>
      <th scope="col">Tarifa diaria</th>
      <th scope="col">Estado</th>
      <button type="button" class="btn btn-primary">Editar Vehiculos</button>
    </tr>
  </thead>
  <tbody>
    @forelse ($vehicles as $vehicle)
    <tr>
        <td>{{ $vehicle->plate_number }}</td>
        <td>{{ $vehicle->brand }}</td>
        <td>{{ $vehicle->model }}</td>
        <td>{{ $vehicle->type }}</td>
        <td>{{ $vehicle->color }}</td>
        <td>{{ $vehicle->capacity }}</td>
        <td>{{ $vehicle->daily_rate }}</td>
        <td>{{ $vehicle->status }}</td>
    </tr>
@empty
    <tr>
        <td colspan="8">No se encuentran registros.</td>
    </tr> 
@endforelse
  </tbody>
</table>

</html>