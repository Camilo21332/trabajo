<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(5);
                return view('empleado.index',$datos); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
        'Nombre'=>'required|string| max:100',
        'Apellido'=>'required|string|max:100',
        'Correo'=>'required|email',
        'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerido'
        ];

        $this->validate($request, $campos, $mensaje);





        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

        if($request->hasFile('foto')){
             
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }




        Empleado::insert($datosEmpleado);


        //return response()->json($datosEmpleado); 
        return redirect('empleado')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $campos=[
            'Nombre'=>'required|string| max:100',
            'Apellido'=>'required|string|max:100',
            'Correo'=>'required|email',

            ];
            $mensaje=[
                'required'=>'El :attribute es requerido',
            

            ];

            if($request->hasFile('foto')){
              $campos=['foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
              $mensaje=['foto.required'=>'La foto es requerido'];

            }
    
            $this->validate($request, $campos, $mensaje);
    
        //
        $datosEmpleado = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $empleado=Empleado::findOrFail($id);

            Storage::delete('public/'.$empleado->foto);

            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }



        Empleado::where('id','=',$id)->update($datosEmpleado);
        $empleado=Empleado::findOrFail($id);
        //return view('empleado.edit', compact('empleado'));
        return redirect('empleado')->with('mensaje','Empleado Modificado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=Empleado::findOrFail($id);

        if(Storage::delete(['public/'.$empleado->foto])){

            Empleado::destroy($id);

        }

        
        return redirect('empleado')->with('mensaje','Empleado Borrado');
    }
}
 