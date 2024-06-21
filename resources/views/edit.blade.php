@extends('layout')

@section('title', 'Editar Persona')

@section('content')

<table cellpading="3" cellspaceing="5">
    <tr>
        <th colspan="4">Editar Persona</th>
    </tr>

    @include('partials.validation-errors')
    <form action="{{route('personas.update',$persona)}}" method="post">
         @method('PATCH')

         <input type="hidden" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}">
        
         @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
</table>
@endsection