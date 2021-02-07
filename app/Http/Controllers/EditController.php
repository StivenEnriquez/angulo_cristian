<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edito(){
        return view('editorial.edit');
      // Consultar editorial con Eloquent
      $cedito = editorial::all();   
      return view('ediorial.edit',['edito' => $editorial] );
  }

  public function form_registro()  {
    return view('editotial.form_registro');
}
public function registrar(Request $request) {
    $editorial = new editorial();
    $editorial>nombre = $request->input('nombre');
    $editorial>direccion= $request->input('cedula');
    $editorial>ciudad= $request->input('direccion');
    $editorial>telefono= $request->input('telefono');
    
    $editorial>save();
    return redirect()->route('listado_editorial');

}
public function form_actualiza($id){
    // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
    $editorial = editorial::findOrFail($id);
    return view ('editorials.form_actualiza', compact('editorial'));
}

public function actualizar(Request $request, $id)
{
    $editorial = editorial::findOrFail($id);
    $editorial->nombreeditorial = $request->input('nombreCli');
    $editorial->cedulaeditorial = $request->input('cedula');
    $editorial->direccioneditorial = $request->input('direccion');
    $editorial->telefonoeditorial = $request->input('telefono');
    $editorial->generoeditorial = $request->input('genero');
    $editorial->save();
    return redirect()->route('listado_editorials');  
}

public function eliminar($id)
{
    $c = editorial::findOrFail($id);
    $c->delete();
    return redirect()->route('listado_editorials');
}
}