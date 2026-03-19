<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Teléfonos {{ $infoCliente->id}}  {{ $infoCliente->nombreCliente}} {{ $infoCliente->apellidoCliente}}</h1>
    <a href="/telefono/crear/{{ $infoCliente->id }}">Crear Teléfono</a>
    <table>
        <thead>
            <tr>
              <td>Id</td>
              <td>Codigo Cliente</td>
              <td>Numero Telefono</td>
              
              <td>Editar</td>
              <td>Eliminar</td>
              

            </tr>
        </thead>
 
        <tbody>
            @foreach($dTelefonos as $telefonos)
            <tr>
                <td>{{ $telefonos->id }}</td>
                <td>{{ $telefonos->codigoCliente }}</td>
                <td>{{ $telefonos->numero }}</td>
                
                <td><a href="/telefono/{{ $telefonos->id }}/edit">Editar</a></td>
                <td><a href="/telefono/eliminar/{{ $telefonos->id }}">Eliminar</a></td>
                
                
                
             
                
                 
            </tr>
            @endforeach
        </tbody>
        
    </table> 
  
</body>
</html>