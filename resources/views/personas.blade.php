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
    
        
            @if($personas)
                @foreach($personas as $persona)
                <tr>
                    <td>
                        @if($persona->image)
                            <img src="/storage/{{ $persona->image}}" alt="{{$persona->cPerApellido}}" width="50" height="50">
                        @endif
                    </td>

                    <td>
                        <a href="{{route('personas.show', $persona)}}">{{$persona->cPerApellido}}</a>
                    </td>
                
                </tr>
                @endforeach
                
            @else
                <li>No existe ninguna persona que mostrar</li>
            @endif
        

        <tr>
            <td colspan="10" class="linke">{{$personas->links('pagination::bootstrap-5')}}</td>
        </tr>

</table>

@endsection