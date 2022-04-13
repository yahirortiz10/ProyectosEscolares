<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $datos['citas']=Citas::paginate(4);
        
        return view('citas.index',$datos);
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('citas.create');
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
        //$datosCita=request()->all();
        $datosCita=request()->except('_token');

        Citas::insert( $datosCita);
        //return response()->json($datosCita);
        return redirect('citas')->with('Mensaje','Cita Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cita= Citas::findOrfail($id);
        return view('citas.edit', compact('cita'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCita=request()->except([ '_token','_method']);
        Citas::where('id','=',$id)->update($datosCita);

        //$cita= Citas::findOrfail($id);
        //return view('citas.edit', compact('cita'));

        return redirect('citas')->with('Mensaje','Reservacion Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita= Citas::findOrfail($id);
        //return view('citas.edit', compact('cita'));
        Citas::destroy($id);



        return redirect('citas')->with('Mensaje','Reservacion Eliminada');
    }









}



