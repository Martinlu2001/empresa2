@extends('layout')

@section('title', 'Persona')

@section('content')

<table class="table table-bordered" style="display:flex;">
    @isset($category)
        <div>
            <h1 class="display-4 mb-0">{{$category->name}}</h1>
            <a href="{{route('personas.index')}}">Regresar a personas</a>
        </div>
    @else
        <h1 class="display-4 mb-0">Personas</h1>
    @endisset
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
                    @if($persona->category_id)
                        <a href="#" class=" badge badge-secondary">{{ $persona->category->name}}</a>
                    @endif
                
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