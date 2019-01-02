@extends('layouts.app')

@section('content')

@if(Auth::user()->hasRole('admin'))
    <div>Acceso como administrador</div>
@else
    <div>Acceso usuario</div>
@endif
<div class="container">
    <div class="row">
        @forelse ($ahorros as $message)
        <div class="col-6">
            <p class="card-text">{{ $message['titulo']}}</p>
            <a href="/messages/{{ $message['id'] }}">Leer más</a>
        </div>
        @empty
            <p>No hay mensajes destacados.</p>
        @endforelse
    </div>
    <a class="btn btn-primary" href="/ahorro/nuevo">Nuevo Ahorro</a>
</div>
@endsection
