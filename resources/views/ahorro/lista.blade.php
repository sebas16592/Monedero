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
            <p class="card-text">{{ $message->nombre}}</p>
            <a href="/messages/{{ $message->id }}">Leer más</a>
        </div>
        @empty
            <p>No hay mensajes destacados.</p>
        @endforelse
    </div>
    <a class="btn btn-primary" href="/ahorro/nuevo">Nuevo Ahorro</a>
</div>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ahorrado</th>
                    <th>Meta</th>
                    <th>Fecha</th>
                    <th>Agregar ahorro</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($ahorros as $ahorro)
                        <tr>
                            <td>{{ $ahorro->nombre }}</td>
                            <td>{{ $ahorro->ahorrado }}</td>
                            <td>{{ $ahorro->total }}</td>
                            <td>{{ $ahorro->fecha }}</td>
                            <td><a href="" class="btn btn-primary"></a></td>
                        </tr>
                    @empty
                        <p>No hay ahorros programados</p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
