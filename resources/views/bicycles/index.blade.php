<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycles</title>
</head>

<body>
    <h1>Listado de bicicletas</h1>
    <ul>
        @foreach ($bicycles as $bicycle)
            <li>{{ $bicycle->brand }} {{ $bicycle->model }}</li>
        @endforeach
    </ul>
</body>

</html>
