<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
</head>
<body>
    <h1>Editar datos de usuarios</h1>

    <form action="{{ route('usuarios.update',$usuarios)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="codigo">
            Usuario
            <br>
            <input type="text" name="codigo" id="codigo-a-c" value="{{ old('codigo', $usuarios->codigo) }}">
        </label>

        <label for="nombre">
            Nombre
            <br>
            <input type="text" name="nombre" id="nombre-a-c" value="{{ old('nombre', $usuarios->nombre) }}">
        </label>
        <label for="tfno">
            tfno
            <br>
            <input type="text" name="tfno" id="tfno-a-c" value="{{ old('tfno', $usuarios->tfno) }}">
        </label>
        <label for="direccion">
            Direccion
            <br>
            <input type="text" name="direccion" id="direccion-a-c" value="{{ old('direccion', $usuarios->direccion) }}">
        </label>

        <button type="submit">Actualizar</button>

    </form>
</body>

</body>
</html>
