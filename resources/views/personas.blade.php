@extends('layout')

@section('title', 'Persona')

@section('content')

<table class="tablaservicios" style="justify-content:center; display:flex">
    
        <tr>
            @if($personas)
                @foreach($personas as $persona)

                <td>{{$persona->nPerCodigo}} <br> {{$persona->cPerApellido}} <br> {{$persona->cPerNombre}} <br> {{$persona->cPerDireccion}} <br> {{$persona->dPerFecNac}} <br> {{$persona->nPerEdad}} <br> {{$persona->cPerSexo}} <br> {{$persona->nPerSueldo}} <br> {{$persona->cPerRnd}}</td>
                    
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