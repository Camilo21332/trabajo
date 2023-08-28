
<h1> {{$modo}} empleado</h1>

<div class="form-group">

<label for="Nombre"> Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre: ''}}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Apellido"> Apellido</label>
<input type="text" class="form-control" name="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:'' }}" id="Apellido">
<br>
</div>

<div class="form-group">
<label for="Correo"> Correo</label>
<input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
<br>
</div>
<div class="form-group">
<label for="foto"> </label>

@if(isset($empleado->foto))
<img class="img-thumbnail img-fluid" src="{{ asset ('storage').'/'.$empleado->foto}}" width="100" alt="">
@endif
<input type="file" class="form-control" name="foto" value="" id="foto">
<br>

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos" >

<a class="btn btn-primary" href="{{url ('empleado/') }}"> Regresar </a>

<br>