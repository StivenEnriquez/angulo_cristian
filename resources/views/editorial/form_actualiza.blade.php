@extends('main')
@section('contenido')

<div class="container">
<h1> Actualizacion de Editorial </h1>
    <form action="{{route('actualiza_cliente', $cliente->id) }}" method="POST">
        @csrf
       
        <label for="nombre">Nombre</label>
        <input type="text" id='nombre' name='nombre' class="form-control" required> <br> <br>

        <label for="direccion">Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required> <br> <br>
    
        <label for="ciudad">Ciudad </label>
        <input type="text" id='Cuidad' name='Cuidad' class="form-control" required> <br> <br>

      

        <label for="telefono">Telefono </label>
        <input type="number" id='telefono' name='telefono' class="form-control" required> <br> <br>

        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop