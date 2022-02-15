@extends('layouts.plantillasbase');

@section('contenido')
<a href="clientes/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead> 
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->documento}}</td>
            <td>{{$cliente->correo}}</td>
            <td>{{$cliente->teléfono}}</td>
            <td>
                <form action="{{ route ('clientes.destroy',$cliente->id) }} "method="POST">
                 <a href="/clientes/{{ $cliente->id}}/edit" class="btn btn-info">Editar</a>
                     @csrf
                     @method('DELETE')
                 <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>      
</table>    
@endsection