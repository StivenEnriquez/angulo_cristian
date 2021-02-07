@extends('main')
  @section('content')

    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card h-100">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"><ul>
        
      
  @foreach($masco as $c)
      
      <h2>nombre: {{$c['nombre']}}</h2>
      
  @endforeach
    </ul></p>
    <button type="button" class="btn btn-primary">Primary</button>
          </div>
        </div>
      </div>
    