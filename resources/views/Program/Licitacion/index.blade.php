@extends('Layout')

@section('title')
Mis licitaciones
@endsection
<link href="{{ asset('css/Licitacion/index.css') }}" rel="stylesheet">
<script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
@section('content')
<div class="container">  
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Folio</th>
            <th>Area</th>
            <th>Fecha de elaboracion</th>
            <th>Fecha de recepcion</th>
            <th>Plazo de dias</th>
            <th>Formato de fecha</th>
            <th>Fecha de culmminacion</th>
            <th colspan="3">Acciones</th>
        </tr>
        @foreach($datos as $item)
        <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->folio}}</td>
            <td>{{$item->area}}</td>
            <td>{{$item->fecha_elaboracion}}</td>
            <td>{{$item->fecha_recepcion}}</td>
            <td>{{$item->plazo_dias}}</td>
            <td>{{$item->formato_fecha}}</td>
            <td>{{$item->fecha_culminacion}}</td>
            <td>
                <form action="{{route('documentos.anexos',$item->area)}}">
                @csrf
                <button type="submit" id="add_document">Ver anexos</button>
                </form>
            </td>
            <td>
                <form action="{{route('documentos.aplica',$item->id)}}">
                @csrf
                <button type="submit" id="add_document">Aplica</button>
                </form>
            </td>
            <td><form action="{{route('documentos.create',$item->id)}}">
                @csrf
                <button type="submit" id="add_document">Añadir documentos</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection