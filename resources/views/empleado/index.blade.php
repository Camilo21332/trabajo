Mostrar la lista de empleados 
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>



    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>

            <td>
                <img src="{{ asset ('storage').'/'.$empleado->foto}}" alt="">
</td>


            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
                    Editar 
                </a>
                 |
                 <form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}

                    <input type="submit" onclick="return confirm ('¿Quieres borrar?')" 
                    value="Borrar">


                 </form>




            </td>
            
        </tr>
@endforeach

    </tbody>
</table>