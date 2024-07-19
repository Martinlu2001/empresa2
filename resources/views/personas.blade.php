@extends('layout')

@section('title', 'Persona')

@section('content')

<table class="table table-bordered" style="display:flex;">
    <tr>
        @auth
        <td>
            <a href="{{route('personas.create')}}"> + Nueva persona</a>
        </td>
        @endauth
    </tr>
</table>


<h2 style="text-align:center;">Listado de personas</h2>

<table class="table table-bordered" style="display:flex">
    
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
            <td colspan="10" class="linke">{{$personas->links('pagination::bootstrap-5')}}</td>
        </tr>

</table>

@endsection