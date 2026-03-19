<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Eliminar Telefono</h1>
    
     <form action="/telefono/{{$telefonoE->id}}" method="POST">
        @csrf
        @method('DELETE')

         <label for="nombre">ID</label>
        <input type="text" name="id" id="id" value="{{$telefonoE->id}}">



        <label for="codigoCliente">codigoCliente</label>
        <input type="text" name="codigoCliente" id="codigoCliente" value="{{$telefonoE->codigoCliente}}" >

        <label for="nombreCliente">numero</label>
        <input type="text" name="nombreCliente" id="nombreCliente" value="{{$telefonoE->numero}}" >
        

         
        

        <button type="submit">Eliminar Telefono</button>

    </form>


</body>
</html>