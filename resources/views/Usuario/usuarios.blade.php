<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
        <h1>Usuarios</h1>
        <form action="{{route('usuarios.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="codigo" placeholder="codigo">
            <input type="text" name="nombre" placeholder="nombre">
            <input type="text" name="tfno" placeholder="tfno">
            <input type="text" name="direccion" placeholder="direccion">
            <br/>
            <button type="submit"> Enviar: </button>
        </form>

</body>
</html>
