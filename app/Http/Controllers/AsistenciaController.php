<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias= Asistencia::paginate(13);
        return view('asistencias.index',compact('asistencias'));
    }
    public function store(Request $request)
    {
       $asistencia = new Asistencia();
       $asistencia->nombre=$request->nombre;
       $asistencia->apellido_paterno=$request->apellido_paterno;
       $asistencia->apellido_materno=$request->apellido_materno;
       $asistencia->fecha_nacimiento=$request->fecha_nacimiento;
       $asistencia->telefono=$request->telefono;
       $asistencia->direccion=$request->direccion;
       $asistencia->dni=$request->dni;
       $asistencia->ingreso=$request->ingreso;
       $asistencia->salida=$request->salida;

       $asistencia->save();
       return redirect()->route('asistencia.show', $asistencia->id);
    }
    public function create()
    {
        return view('asistencias.create');
    }
    public function edit($asistencia)
    {
        $asistencia=Asistencia::find($asistencia);
        return view('asistencias.edit', compact('asistencia'));
    }
    public function update(Request $request, Asistencia $asistencia)
    {
        $asistencia->nombre = $request->nombre;
        $asistencia->apellido_paterno=$request->apellido_paterno;
        $asistencia->apellido_materno=$request->apellido_materno;
        $asistencia->fecha_nacimiento=$request->fecha_nacimiento;
        $asistencia->telefono=$request->telefono;
        $asistencia->direccion=$request->direccion;
        $asistencia->dni=$request->dni;
        $asistencia->ingreso=$request->ingreso;
        $asistencia->salida=$request->salida;

        $asistencia->save();
        return redirect()->route('asistencia.show', $asistencia->id);
    }
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencia.index',$asistencia->id);
    }
    public function show($asistencia)
    {
        $asistencias=Asistencia::find($asistencia);
        return view('asistencias.show',compact('asistencias'));
    }
}
