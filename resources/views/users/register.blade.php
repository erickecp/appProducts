@extends('shared.base')
@section('content')
<h2> Registro </h2>
<form method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="name" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Email</label>
                    <input required autocomplete="off" name="email" class="form-control"
                           type="text" placeholder="precio">
                </div>
                <div class="form-group">
                    <label class="label">Password</label>
                    <input required autocomplete="off" name="password" class="form-control"
                           type="password" placeholder="****">
                </div>


                <button class="btn btn-success">Registrar</button>
            </form>

@endsection
