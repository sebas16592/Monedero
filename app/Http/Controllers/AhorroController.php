<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhorroController extends Controller
{
    function ahorroProgramado(){

        $ahorros =[ 
            [
                'id' => 1,
                'titulo' => 'San andres',
                'image' => 'https://picsum.photos/420/320?image=0'
            ],
            [
                'id' => 2,
                'titulo' => 'Moto Hijo',
                'image' => 'https://picsum.photos/420/320?image=1'
            ],
            [
                'id' => 3,
                'titulo' => 'Casa propia',
                'image' => 'https://picsum.photos/420/320?image=2'
            ],
            [
                'id' => 4,
                'titulo' => 'Play 4',
                'image' => 'https://picsum.photos/420/320?image=3'
            ]
        ];

        return view('ahorro.lista',['ahorros'=>$ahorros]);
    }

    function ahorroNuevo(){
        return view('ahorro.nuevo');
    }

    function ahorroGuardar(Request $request){
        dd($request->request);
        return view('ahorro.nuevo');
    }
}
