@extends('template.templates')

@section('title','Index de asistencias')

@section('content')
    
    <div>
        <h1>Crear mas registros</h1>
        <form action="{{route('asistencia.store')}}" method="POST">
            @csrf
            <label >
                Nombre:
                <input type="text" name="nombre">
            </label>
            <label >
                Apellido Paterno:
                <input type="text" name="apellido_paterno">
            </label>
            <label >
                Apellido Materno:
                <input type="text" name="apellido_materno">
            </label>
            <label >
                Fecha de Nacimiento:
                <input type="date" name="fecha_nacimiento">
            </label>
            <label >
                Telefono:
                <input type="number" name="telefono">
            </label>
            <label >
                Direccion:
                <input type="text" name="direccion">
            </label>
            <label >
                DNI:
                <input type="number" name="dni">
            </label>
            <label >
                Ingreso:
                <input type="date" name="ingreso">
            </label>
            <label >
                Salida:
                <input type="date" name="salida">
            </label>
            <button type="submit">Enviar Formulario</button>
        </form>
    </div>

@endsection