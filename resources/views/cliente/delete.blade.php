<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Eliminar Cliente</h1>
    
     <form action="/cliente/{{$clienteE->id}}" method="POST">
        @csrf
        @method('DELETE')

         <label for="nombre">ID</label>
        <input type="text" name="id" id="id" value="{{$clienteE->id}}">



        <label for="codigoCliente">codigoCliente</label>
        <input type="text" name="codigoCliente" id="codigoCliente" value="{{$clienteE->codigoCliente}}">

        <label for="nombreCliente">nombreCliente</label>
        <input type="text" name="nombreCliente" id="nombreCliente" value="{{$clienteE->nombreCliente}}">

        <label for="apellidoCliente">apellidoCliente</label>
        <input type="text" name="apellidoCliente" id="apellidoCliente" value="{{$clienteE->apellidoCliente}}">

        <label for="ciudadCliente">ciudadCliente</label>
        <input type="text" name="ciudadCliente" id="ciudadCliente" value="{{$clienteE->ciudadCliente}}">
        

        <button type="submit">Eliminar Cliente</button>

    </form>


</body>
</html>