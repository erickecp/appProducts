@extends('shared.base')
@section('content')



    <h1>Lista de Usuarios </h1>

    <a name="" id="" class="btn btn-primary mb-3"
    href="{{route('users.create')}}" role="button">Nuevo Usuario</a>

   <div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($users as $us)
                <tr class="table-primary" >
                    <td scope="row">{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->password}}</td>
                    <td>
                    <a class="btn btn-warning" href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="" method="post">
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
