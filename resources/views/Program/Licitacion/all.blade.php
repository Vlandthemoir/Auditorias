@extends('Layout')

@section('title')
Todas las licitaciones
@endsection
<link href="{{ asset('css/Licitacion/index.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
    <table class="table">
        <tr>
            <th>Propietario</th>
            <th>Licitacion</th>
            <th>Folio</th>
            <th>Area</th>
            <th>Fecha de elaboracion</th>
            <th>Fecha de recepcion</th>
            <th>Fecha de culmminacion</th>
            <th colspan="4">Acciones</th>
        </tr>
        @foreach($datos as $item)
        <tr>
            <td>{{$item->usuario}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->folio}}</td>
            <td>{{$item->area}}</td>
            <td>{{$item->fecha_elaboracion}}</td>
            <td>{{$item->fecha_recepcion}}</td>
            <td>{{$item->fecha_culminacion}}</td>
            <td>
                <form action="{{route('documentos.anexos',$item->area)}}">
                @csrf
                <button type="submit" id="add_document">Ver anexos</button>
                </form>
            </td>
            <td>
                <form action="{{route('documentos.create',$item->id)}}">
                @csrf
                <button type="submit" id="add_document">Ver documentos</button>
                </form>
            </td>
            <td>
                <form action="{{route('licitacion.delete',$item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" id="add_document">Eliminar licitación</button>
                </form>
            </td>
            <td>
                <form action="{{route('licitacion.edit',$item->id)}}" method="GET">
                @csrf
                <button type="submit" id="add_document">Actualizar licitacion</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
