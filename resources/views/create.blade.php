@extends('layout')

@section('title', 'Crear Persona')

@section('content')


<table cellpadding="3" cellspaceing="5">

    <tr>
        <th colspan="4">Crear nuevo persona</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{route('personas.store')}}" method="post">
        
        <?php 
            $alea = rand();
        ?>
        <input type="hidden" name="cPerRnd" value="{{ $alea }}">  </td>
        
        @include('partials.form', ['btnText' => 'Guardar'])
    </form>
</table>
@endsection