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
                Fecha de creacion: {{ $ahorro->created_at->format('d/m/Y') }}
            </div>
            <div class="col-6">
                Fecha de finalizacion: {{ \Carbon\Carbon::parse($ahorro->fecha)->format('d/m/Y') }}
            </div>
            <div class="col-6">
                Dias faltantes para la meta: {{ $restantes }}
            </div>
            <div class="col-6">
                Ahorro diario: {{ $diario }}
            </div>
        </div>
        <form action="/ahorro/ver/{{ $ahorro->id }}/guardar" method="POST">
            {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-6">
                    <label for="total">Agregar al ahorro</label>
                    <input type="number" class="form-control" id="ahorro" name="ahorro" placeholder="Cuánto dinero quieres agregar?">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection