@extends('main')
@section('contenido')

<div class="container">
<h1> Registro de Libros </h1>
    <form action="{{ url('libro/libro') }}" method="POST">
        @csrf
       
        <label for="ISBN">ISBN</label>
        <input type="text" id='ISBN' name='ISBN' class="form-control" required> <br> <br>
    
        <label for="titulo">Titulo </label>
        <input type="text" id='titulo' name='titulo' class="form-control" required> <br> <br>

        <label for="direccion">Direccion </label>
        <input type="text" id='direccion' name='direccion' class="form-control" required> <br> <br>

        <label for="precio">Precio </label>
        <input type="number" id='precio' name='precio' class="form-control" required> <br> <br>

        <label for="edirotial">Edirotial </label>
        <input type="editorial" id='editorial' name='editorial' class="form-control" required> <br> <br>


        
    
        <br> <br>
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop