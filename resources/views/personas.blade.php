@extends('layout')

@section('title', 'Persona')

@section('content')
<tr>
    <td>
        <a href="{{route('personas.create')}}">Nueva persona</a>
    </td>
</tr>

<tr>
    <th>Listado de personas</th>
</tr>
<table class="tablaservicios" style="justify-content:center; display:flex">
    
        <tr>
            @if($personas)
                @foreach($personas as $persona)
                    <td><a href="{{route('personas.show', $persona)}}">{{$persona->cPerApellido}}</a></td>
                    
                @endforeach
            @else
                <li>No existe ninguna persona que mostrar</li>
            @endif
        </tr>

        <tr>
            <td colspan="10" class="linke">{{$personas->links()}}</td>
        </tr>

</table>

@endsection