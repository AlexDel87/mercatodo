@extends('layouts.plantillasbase');

@section('contenido')
<a href="clientes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-04">
    <head>
        <tr>
            <th scope="col">Consecutivo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead> 
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->Consecutivo}}</td>
            <td>{{ $cliente->Nombre}}</td>
            <td>{{ $cliente->Documento}}</td>
            <td>{{ $cliente->Correo}}</td>
            <td>{{ $cliente->Teléfono}}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>    
        @endforeach
    </tbody>      
</table>    
@endsection