@extends('layouts.proveedor')

@section('contenido')
<a href="proveedores/create" class="btn btn-primary">Crear</a> 
<table class="table table-dark table-striped mt-4">
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">ACCIONES</th>
    </tr>
</thead>
<tbody>
    @foreach ($proveedores as $proveedor)
        <tr>
            <td>{{$proveedor->id}}</td>
            <td>{{$proveedor->Nombre}}</td>
            <td>{{$proveedor->Producto}}</td>
            <td>{{$proveedor->Telefono}}</td>
            <td>
                <form action="{{route ('proveedores.destroy',$proveedor->id)}}" method="POST">
                <a href="/proveedores/{{$proveedor->id}}/edit" class="btn btn-warning">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>   
@endsection