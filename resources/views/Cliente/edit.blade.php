@extends('layouts.plantillasbase')

@section('contenido')
<h2>EDITAR CLIENTES</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="number" class="form-control" value="{{$cliente->documento}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text"  class="form-control" value="{{$cliente->correo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="number " step="any" class="form-control" value="{{$cliente->telefono}}">
  </div> 
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection
