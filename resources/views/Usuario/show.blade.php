<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>Detalles de usuarios</h1>
    <ul>
        <li><strong>Codigo:</strong> {{ $usuarios->Usuario }}</li>
        <li><strong>Nombre</strong> {{ $usuarios->nombre }}</li>
        <li><strong>Tfno</strong> {{ $usuarios->tfno }}</li>
    </ul>

    <form action="{{ route('usuarios.destroy', $usuarios) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <a href="{{ route('usuarios.index') }}">Ir al inicio</a>
        <br><br>
        <a href="{{ route('usuarios.edit', $usuarios) }}">Editar</a>
        <br><br>
        <button type="submit">Borrar</button>
    </form>

</body>
</html>
