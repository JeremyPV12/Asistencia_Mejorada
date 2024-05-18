@extends('template.templates')

@section('title','Index de asistencias')

@section('content')
    <div>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
            </thead>
            <tbody>
                @foreach ($asistencias as $asistencia)
                    <tr>
                        <td>{{$asistencia->id}}</td>
                        <td>{{$asistencia->nombre}}</td>
                        <td>{{$asistencia->apellido_paterno}}</td>
                        <td>{{$asistencia->apellido_materno}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('asistencia.create')}}">Crear</a>
    </div>
@endsection