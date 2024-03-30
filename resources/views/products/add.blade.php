@extends('shared.base')
@section('content')

<form method="POST" action="{{route('products.store')}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Precio</label>
                    <input required autocomplete="off" name="precio" class="form-control"
                           type="number" placeholder="precio">
                </div>


                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route('products.index')}}">Volver al listado</a>
            </form>

@endsection
