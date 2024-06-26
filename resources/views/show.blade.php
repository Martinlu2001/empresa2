@extends('layout')

@section('title', 'Persona |' . $persona->cPerNombre)

@section('content')

<tr>
    <td colspan="5">{{$persona->nPerCodigo}} </td>
    <a href="{{route('personas.edit', $persona)}}">Editar</a>
    <td colspan="2">
        <form action="{{route('personas.destroy', $persona)}}" method="post">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>

    </td>
</tr>
<br>

<tr>
    <td colspan="5">{{$persona->cPerApellido}}</td>
</tr>
<br>
<tr>
    <td colspan="5">{{$persona->cPerNombre}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->cPerDireccion}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->dPerFecNac}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->nPerEdad}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->cPerSexo}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->nPerSueldo}}</td>
</tr>

<tr>
    <td colspan="5">{{$persona->nPerEstado}}</td>
</tr>
<tr>
    <td colspan="5">{{$persona->remember_token}}</td>
</tr>

@endsection