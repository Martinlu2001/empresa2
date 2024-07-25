@extends('layout')

@section('title', 'Crear Persona')

@section('content')


<table cellpadding="3" cellspacing="5" class="table table-bordered" style="display:flex;">

    <tr>
        <th colspan="4">Crear nueva persona</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{route('personas.store')}}" method="post" enctype="multipart/form-data">
        
        <?php 
            $alea = rand();
        ?>
        <input type="hidden" name="cPerRnd" value="{{ $alea }}">  </td>
        
        @include('partials.form', ['btnText' => 'Guardar'])
    </form>
</table>
@endsection