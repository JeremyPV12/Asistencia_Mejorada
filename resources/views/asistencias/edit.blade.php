@extends('template.templates')

@section('title','Index de asistencias')

@section('content')
    <div>
        <h1>Editar los registros</h1>
        <form action="{{route('asistencia.update',$asistencia->id)}}" method="POST">
            @csrf
            @method('put')
            <label >
                Nombre:
                <input type="text" name="nombre" value="{{$asistencia->nombre}}">
            </label>
            <label >
                Apellido Paterno:
                <input type="text" name="apellido_paterno" value="{{$asistencia->apellido_paterno}}">
            </label>
            <label >
                Apellido Materno:
                <input type="text" name="apellido_materno" value="{{$asistencia->apellido_materno}}">
            </label>
            <label >
                Fecha de Nacimiento:
                <input type="date" name="fecha_nacimiento" value="{{$asistencia->fecha_nacimiento}}">
            </label>
            <label >
                Telefono:
                <input type="number" name="telefono" value="{{$asistencia->telefono}}">
            </label>
            <label >
                Direccion:
                <input type="text" name="direccion" value="{{$asistencia->direccion}}">
            </label>
            <label >
                DNI:
                <input type="number" name="dni" value="{{$asistencia->dni}}">
            </label>
            <label >
                Ingreso:
                <input type="date" name="ingreso" value="{{$asistencia->ingreso}}">
            </label>
            <label >
                Salida:
                <input type="date" name="salida" value="{{$asistencia->salida}}">
            </label>
            <button type="submit">Actualizar Formulario</button>
        </form>
    </div>
@endsection