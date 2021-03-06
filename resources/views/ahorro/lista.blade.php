@extends('layouts.app')

@section('content')

@if(Auth::user()->hasRole('admin'))
    <div>Acceso como administrador</div>
@else
    <div>Acceso usuario</div>
@endif
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ahorrado</th>
                    <th>Meta</th>
                    <th>Fecha</th>
                    <th>Detalle</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($ahorros as $ahorro)
                        <tr>
                            <td>{{ $ahorro->nombre }}</td>
                            <td>{{ number_format($ahorro->ahorrado) }}</td>
                            <td>{{ number_format($ahorro->total) }}</td>
                            <td>{{ \Carbon\Carbon::parse($ahorro->fecha)->format('d/m/Y') }}</td>
                            <td><a href="ahorro/ver/{{ $ahorro->id }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i></a></td>
                        </tr>
                    @empty
                        <p>No hay ahorros programados</p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
