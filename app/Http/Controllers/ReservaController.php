<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
class ReservaController extends Controller
{
    //
    public function api_reservas(Request $request){
        if ($request->has('id')){
            $reservas = Reserva::where('id',$request->id)->get();
        }
        else{
            $reservas = Reserva::all();
        }
        return response()->json($reservas);
    }

    public function api_reservas_crear(Request $request){
        $reserva = new Reserva;
        $reserva->fecha_devolucion = $request->fecha_devolucion;
        $reserva->libro_id = $request->libro_id;
        $reserva->alumno_id = $request->alumno_id;
        $reserva->save();
    }

    public function api_reservas_editar(Request $request ,$id){
        $reserva = Reserva::find($id);
        // dd($request);
        $reserva->fecha_devolucion = $request->fecha_devolucion;
        $reserva->libro_id = $request->libro_id;
        $reserva->alumno_id = $request->alumno_id;
        $reserva->save();
    }

    public function api_reservas_eliminar($id){
        $reserva = Reserva::find($id);
        $reserva->delete();
    }

    
}
