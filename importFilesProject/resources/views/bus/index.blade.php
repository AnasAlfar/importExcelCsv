<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Bus</title>
</head>
<body>
@include('partials.navbar')
<br>
<br>
<form action="{{ route('bus.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <input type="file" class="form-control" name="file">
    <button type="submit" class="btn btn-primary">Import</button>

</form>
<br>
<a href="{{ route('bus.create') }}" class="btn btn-success">Export</a>
<br>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">bus #</th>
      <th scope="col">shofair name</th>
      <th scope="col">number</th>
      <th scope="col">capacity</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($allBuses as $bus)
        <tr>
        <th scope="row">{{ $bus->bus_number }}</th>
        <td>{{ $bus->shofir_name }}</td>
        <td>{{ $bus->number }}</td>
        <td>{{ $bus->capacity }}</td>
        </tr>
    @endforeach
    
  </tbody>
</table>
    




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>