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

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<br>
<div class="container">
    <div class="row justify-content-end mb-3">
        <div class="col-auto">
            <form action="{{ route('bus.store') }}" method="post" enctype="multipart/form-data" id="uploadForm">
                @csrf
                
                <input type="file" name="file" id="uploadFile" style="display: none;">
                
                <button class="btn btn-primary" type="button" onclick="document.getElementById('uploadFile').click();">
                    Import
                </button>
            </form>
        </div>
        <div class="col-auto">
            <a href="{{ route('bus.create') }}" class="btn btn-success">Export</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
        </div>
    </div>
</div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            $(inputFile).parent()
                .find('.custom-file-label')
                .html(inputFile.files[0].name);
        });
    });

    document.getElementById('uploadFile').onchange = function(event) {
        document.getElementById('uploadForm').submit();
    };
</script>


</body>
</html>