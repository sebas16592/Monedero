@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/ahorro/guardar" method="POST">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-6">
                <label for="nombre">Que meta quieres alcanzar?</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Que meta quieres alcanzar?">
                
            </div>
            <div class="col-6">
                <label for="total">Cuánto dinero quieres ahorrar?</label>
                <input type="number" class="form-control" id="total" name="total" placeholder="Cuánto dinero quieres ahorrar?">
            </div>
            <div class="col-6">
                <label for="total">En cuántos años quieres alcanzarlo?</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="En cuánto tiempo quieres alcanzarlo?">
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