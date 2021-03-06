@extends('main')
@section('contenido')

<h1> Listado de Editoriales</h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Direccion </th>
            <th scope="col">Nombre</th>
            <th scope="col">Ciudad </th>
            <th scope="col">Telefono </th>
           
            <th scope="col" colspan=2> Opciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $c)
            <tr>
                <td> {{ $c->id }} </td>
                <td> {{ $c->nombre }} </td>
                <td> {{ $c->direccion }} </td>
                <td> {{ $c->ciudad }}</td>
                <td> {{ $c->telefonoCliente }} </td>

               
                <td> <a href="{{route('form_actualizaCli',$c->id)}}" class="btn btn-success">Editar</a></td>
			    <td> <a href="{{route('elimina_Cliente', $c->id)}}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
    @endforeach
    </tbody>
</table


@stop


