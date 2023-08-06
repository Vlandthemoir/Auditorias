@extends('Layout')

@section('title')
Auditoria de documentos a integrar al expediente del proyecto
@endsection
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th rowspan="2">Planeación</th>
            <th rowspan="2">Aplica</th>
            <th colspan="1">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Enviar</th>
        </tr>
        @foreach ($documento1 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.aplica-store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->aplica == "")
                    <select name="aplica">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                    @if ($item->aplica == "si")
                    <select name="aplica">
                        <option value="" disabled selected>si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->aplica == "no")
                    <select name="aplica">
                        <option value="" disabled selected>no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td><button>Enviar</button></td>
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
    </table>
</div>
@endsection