<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
    //

    public function ej1Parametro(){
        return 'Éste es el resultado del primer ejercicio de la práctica hecha por Xavier';
    }

    public function primeraView(){
        return view('PrimeraView') -> with('text', 'Éste es el resultado del primer ejercicio de la práctica hecha por Xavier');
    }


    public function variosParametros($parametro1,$parametro2,$parametro3,$parametro4){

        $t_final = 'Texto 1: ' .$parametro1 .'######'; 
        $t_final .= 'Texto 2: ' .$parametro2 .'######'; 
        $t_final .= 'Texto 3: ' .$parametro3 .'######'; 
        $t_final .= 'Texto 4: ' .$parametro4 .'######'; 
        return view('V_parametros') -> with('text', $t_final);
    }
}
