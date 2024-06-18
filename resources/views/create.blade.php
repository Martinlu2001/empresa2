@extends('layout')

@section('title', 'Crear Persona')

@section('content')


<table cellpadding="3" cellspaceing="5">

<tr>
    <th colspan="4">Crear nuevo persona</th>
</tr>

<form action="{{route('personas.store')}}" method="post">

@csrf
<tr>
    <th>Apellidos</th>
    <td> <input type="text" name="cPerApellido"> <br>{{ $errors->first('cPerApellido')}}</td>
</tr>

<tr>
    <th>Nombres</th>
    <td><input type="text" name="cPerNombre"><br>{{ $errors->first('cPerNombre')}}</td>
</tr>

<tr>
    <th>Direccion</th>
    <td><input type="text" name="cPerDireccion"><br>{{ $errors->first('cPerDireccion')}}</td>
</tr>

<tr>
    <th>Fecha nacimiento</th>
    <td><input type="date" name="dPerFecNac"><br>{{ $errors->first('dPerFecNac')}}</td>
</tr>

<tr>
    <th>Edad</th>
    <td><input type="text" name="nPerEdad"><br>{{ $errors->first('nPerEdad')}}</td>
</tr>

<tr>
    <th>Sueldo</th>
    <td><input type="text" name="nPerSueldo"><br>{{ $errors->first('nPerSueldo')}}</td>
</tr>

<tr>
    <th>Estado</th>

    <!-- <label for="nPerEstado">Elija un estado:</label> -->
    <td>
        <select id="nPerEstado" name="nPerEstado">
            <option value="1">1</option>
            <option value="0">0</option>
        </select>
        <br>{{ $errors->first('nPerEstado')}}
    </td>
    
</tr>

<tr>
    <?php 
        $alea = rand();
    ?>
    <td><input type="hidden" name="cPerRnd" value="<?php echo $alea ?>">  </td>
</tr>
<tr>
    <td colspan="2" align="center"><button>Guardar</button></td>
</tr>
</form>
</table>
@endsection