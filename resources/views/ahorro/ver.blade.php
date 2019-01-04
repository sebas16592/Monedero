@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $ahorro->nombre }}
            </div>
            <div class="col-6">
                Meta: {{ $ahorro->total }}
            </div>
            <div class="col-6">
                Ahorrado: {{ $ahorro->ahorrado }}
            </div>
            <div class="col-6">
                Falta: {{ $ahorro->total-$ahorro->ahorrado }}
            </div>
            <div class="col-6">
                Fecha de creacion: {{ $ahorro->created_at->format('Y-m-d') }}
            </div>
            <div class="col-6">
                Fecha de finalizacion: {{ $ahorro->fecha }}
            </div>
            <div class="col-6">
                Dias faltantes para la meta: {{ $restantes }}
            </div>
            <div class="col-6">
                Ahorro diario: {{ $diario }}
            </div>
        </div>
    </div>
@endsection