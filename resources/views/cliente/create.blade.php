<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear Cliente</h1>

    <form action="/cliente" method="POST">
        @csrf
        <label for="nombre">codigoCliente</label>
        <input type="text" name="codigoCliente" id="codigoCliente">

        <label for="apellido">nombreCliente</label>
        <input type="text" name="nombreCliente" id="nombreCliente">

        <label for="apellido">apellidoCliente</label>
        <input type="text" name="apellidoCliente" id="apellidoCliente">


        <label for="ciudad">ciudadCliente</label>
        <input type="text" name="ciudadCliente" id="ciudadCliente">

     

        <button type="submit">Guardar Alumno</button>

    </form>
    
</body>
</html>