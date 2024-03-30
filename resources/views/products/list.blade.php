@extends('shared.base')
@section('content')



    <h1>Lista de productos </h1>

    @include("shared.notifaction")

    <a name="" id="" class="btn btn-primary mb-3"
    href="{{route('products.create')}}" role="button">Nuevo Producto</a>

   <div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <caption>Lista de productos</caption>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($products as $prod)
                <tr class="table-primary" >
                    <td scope="row">{{$prod->nombre}}</td>
                    <td>{{$prod->descripcion}}</td>
                    <td>{{$prod->stock}}</td>
                    <td>{{$prod->precio}}</td>
                    <td>
                    <a class="btn btn-warning" href="{{route('products.edit', $prod->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{route('products.destroy', $prod->id) }}" method="post">
                                @method("delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>

            </tfoot>
    </table>
   </div>

@endsection
