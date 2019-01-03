<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ahorro;

class AhorroController extends Controller
{
    function ahorroProgramado(){

        $ahorros = Ahorro::all();
        return view('ahorro.lista',['ahorros'=>$ahorros]);
    }

    function ahorroNuevo(){
        return view('ahorro.nuevo');
    }

    function ahorroGuardar(Request $request){
        $user = $request->user();
        $ahorro = Ahorro::create([
            'user_id' => $user->id,
            'nombre' => $request->input('nombre'),
            'anos' => $request->input('anos'),
            'ahorrado' => 0,
            'total' => $request->input('total'),
        ]);
        return view('ahorro.nuevo');
    }
}
