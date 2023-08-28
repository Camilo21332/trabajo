fotmalario que tendra datos en comun con crate y edit
<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre">
<br>

<label for="Apellido"> Apellido</label>
<input type="text" name="Apellido" value="{{$empleado->Apellido}}" id="Apellido">
<br>

<label for="Correo"> Correo</label>
<input type="text" name="Correo" value="{{$empleado->Correo}}" id="Correo">
<br>

<label for="foto"> foto</label>
{{ $empleado->foto }}

<img src="{{ asset ('storage').'/'.$empleado->foto}}" alt="">

<input type="file" name="foto" value="" id="foto">
<br>

<input type="submit" value="Guardar datos" >
<br>