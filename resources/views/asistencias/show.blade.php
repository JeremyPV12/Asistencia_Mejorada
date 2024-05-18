@extends('template.templates')

@section('title','Index de asistencias')

@section('content')
    <div>
        <h1>Registro {{$asistencias->id}}</h1>
        <ul>
            <li>{{$asistencias->dni}}</li>
        </ul>
        <a href="{{route('asistencia.edit',$asistencias->id)}}">Editar</a>

        <form action="{{route('asistencia.destroy',$asistencias->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </div>
@endsection