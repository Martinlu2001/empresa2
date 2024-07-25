@csrf
<tr>
    <td colspan="2">
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Seleccione archivo</label>
        </div>
    </td>
</tr>
<tr>
    <th>Apellidos</th>
    <td> <input type="text" name="cPerApellido" value="{{old('cPerApellido',$persona->cPerApellido)}}"></td>           
</tr>

<tr>
    <th>Nombres</th>
    <td><input type="text" name="cPerNombre" value="{{old('cPerNombre',$persona->cPerNombre)}}"></td>
</tr>

<tr>
    <th>Direccion</th>
    <td><input type="text" name="cPerDireccion" value="{{old('cPerDireccion',$persona->cPerDireccion)}}"></td>
</tr>

<tr>
    <th>Fecha nacimiento</th>
    <td><input type="date" name="dPerFecNac" value="{{old('dPerFecNac',$persona->dPerFecNac)}}"></td>
</tr>

<tr>
    <th>Edad</th>
    <td><input type="text" name="nPerEdad" value="{{old('nPerEdad',$persona->nPerEdad)}}"></td>
</tr>

<tr>
    <th>Sueldo</th>
    <td><input type="text" name="nPerSueldo" value="{{old('nPerSueldo',$persona->nPerSueldo)}}"></td>
</tr>

<tr>
    <th>Estado</th>

    <!-- <label for="nPerEstado">Elija un estado:</label> -->
    <td>
        <select id="nPerEstado" name="nPerEstado">
            <option value="1" {{ old('nPerEstado', $persona->nPerEstado) == 1 ? 'selected' : '' }}>1</option>
            <option value="0" {{ old('nPerEstado', $persona->nPerEstado) == 0 ? 'selected' : '' }}>0</option>
        </select>
    
    </td>
    
</tr>

<tr>
    <td colspan="2" align="center"><button class="btn btn-primary">{{$btnText}}</button></td>
</tr>