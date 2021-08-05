@extends('layouts.historiaclinica')

@section('contenido')
    <a href="historiaclinica/create" class="btn btn-warning">Crear</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">historiacompleta</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($historiasclinicas as $historiaclinica)
                <tr>
                    <td>{{$historiaclinica->id}}</td>
                    <td>{{$historiaclinica->name}}</td>
                    <td>{{$historiaclinica->historiacompleta}}</td>
                    <td>{{$historiaclinica->descripcion}}</td>
                    <td>
                        <a href="" class="btn btn-info">editar</a>
                        <button class="btn btn-danger">eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection