@extends('layout')

@section('title', 'Editar Persona')

@section('content')

<table cellpading="3" cellspacing="5" class="table table-bordered" style="display:flex;">
    @auth
    <tr>
        <th colspan="4">Editar Persona</th>
    </tr>
    <tr>
        <th style="justify-content:center; display:flex;"><img  src="/storage/{{ $persona->image}}" alt="{{ $persona->cPerApellido}}" width="50" height="50"></th>
    </tr>
    @endauth

    @include('partials.validation-errors')
    <form action="{{route('personas.update',$persona)}}" method="post" enctype="multipart/form-data">
         @method('PATCH')

         <input type="hidden" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}">
        
         @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
</table>
@endsection