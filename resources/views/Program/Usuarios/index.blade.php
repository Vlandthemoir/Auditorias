@extends('Layout')

@section('title')
Usuarios registrados
@endsection
<link href="{{ asset('css/Licitacion/index.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Correo electronico</th>
            <th>Tipo de usuario</th>
            <th>Contraseña</th>
            <th colspan="2">Acciones</th>
        </tr>
        @foreach($datos as $item)
        <tr>
            <td>{{$item->usuario}}</td>
            <td>{{$item->correo_electronico}}</td>
            <td>{{$item->tipo_usuario}}</td>
            <td>**********</td>
            <td>
                <form action="{{route('usuarios.edit',$item->id)}}" method="GET">
                @csrf
                <button type="submit" id="add_document">Actualizar datos</button>
                </form>
            </td>
            <td><form action="{{route('usuarios.delete',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" id="add_document">Borrar usuario</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection