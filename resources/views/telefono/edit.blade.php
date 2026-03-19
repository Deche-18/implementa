<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Teléfono</h1>

     <form action="/telefono/{{$telefonoE->id}}" method="POST">
        @csrf
        @method('PUT')

         <label for="nombre">ID</label>
        <input type="text" name="id" id="id" value="{{$telefonoE->id}}">



        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" value="{{$telefonoE->numero}}">

        <label for="codigoCliente">Código Cliente</label>
        <input type="text" name="codigoCliente" id="codigoCliente" value="{{$telefonoE->codigoCliente}}">


        <button type="submit">Actualizar Teléfono</button>

    </form>
    
</body>
</html>