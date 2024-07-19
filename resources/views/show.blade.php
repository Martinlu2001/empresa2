@extends('layout')

@section('title', 'Persona |' . $persona->cPerNombre)

@section('content')

<table cellpadding="3" cellspacing="5" class="table table-bordered" style="display:flex;"> 
    @auth
    <tr>
        <th>Codigo: </th>
        <td colspan="5">{{$persona->nPerCodigo}} </td>
    </tr>

    <tr>
        <th>Apellidos: </th>
        <td colspan="5">{{$persona->cPerApellido}}</td>
    </tr>

    <tr>
        <th>Nombres: </th>
        <td colspan="5">{{$persona->cPerNombre}}</td>
    </tr>

    <tr>
        <th>Direccion: </th>
        <td colspan="5">{{$persona->cPerDireccion}}</td>
    </tr>

    <tr>
        <th>Fecha de nacimiento: </th>
        <td colspan="5">{{$persona->dPerFecNac}}</td>
    </tr>

    <tr>
        <th>Edad: </th>
        <td colspan="5">{{$persona->nPerEdad}}</td>
    </tr>

    <tr>
        <th>Sexo: </th>
        <td colspan="5">{{$persona->cPerSexo}}</td>
    </tr>

    <tr>
        <th>Sueldo: </th>
        <td colspan="5">{{$persona->nPerSueldo}}</td>
    </tr>

    <tr>
        <th>Estado: </th>
        <td colspan="5">{{$persona->nPerEstado}}</td>
    </tr>

    <tr>
        <td><a href="{{route('personas.edit', $persona)}}">Editar</a></td>
        <td colspan="2">
            <form action="{{route('personas.destroy', $persona)}}" method="post">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endauth
</table>

@endsection