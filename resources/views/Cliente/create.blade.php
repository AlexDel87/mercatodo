@extends('layouts.plantillasbase');

@section('contenido')
<h2>CLIENTE NUEVO</h2>

<form action="/clientes" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Correo</label>
    <input id="correo" name="correo" type="text"  class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="number" step="any" class="form-control" tabindex="5">
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="6">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>
</form>
@endsection