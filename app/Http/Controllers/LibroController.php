<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Asignatura;

class LibroController extends Controller
{
    //
    public function api_general() {

        $libros = Asignatura::with('libros')->get();
    
        // return view('homeview', ['libros' => $libros]);
        return response()->json($libros);
        
    }

    public function api_libros() {

        $libros = Libro::all();
    
        // return view('homeview', ['libros' => $libros]);
        return response()->json($libros);
        
    }

    public function api_asignaturas() {

        $asignaturas = Asignatura::all();
    
        // return view('homeview', ['libros' => $libros]);
        return response()->json($asignaturas);
        
    }
}
