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
        Ahorro::create([
            'user_id' => $user->id,
            'nombre' => $request->input('nombre'),
            'fecha' => $request->input('fecha'),
            'ahorrado' => 0,
            'total' => $request->input('total'),
        ]);
        return redirect('ahorro');
    }

    function ahorroVer(Ahorro $ahorro,Request $request){
        $carbon2 = new \Carbon\Carbon($ahorro->fecha);
        $carbon1 = new \Carbon\Carbon(date('Y-m-d'));
        $diasrestantes=$carbon1->diffInDays($carbon2);
        $diario=($ahorro->total-$ahorro->ahorrado)/$diasrestantes;
        return view('ahorro.ver',['ahorro'=>$ahorro,'restantes'=>$diasrestantes,'diario'=>$diario]);
    }

    function ahorroVerGuardar(Ahorro $ahorro,Request $request){
        $ahorro->ahorrado=$ahorro->ahorrado+$request->input('ahorro');
        $ahorro->save();
        return redirect('ahorro/ver/'.$ahorro->id);
    }
}
