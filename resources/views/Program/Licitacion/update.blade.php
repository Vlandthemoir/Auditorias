@extends('Layout')

@section('title')
Actualizar licitacion
@endsection
<link href="{{ asset('css/Licitacion/create.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
    <form id="contact" action="{{route('licitacion.update',$licitacion->id)}}" method="post">
        @csrf
        @method("PUT")
        <h3>Actualizar licitacion</h3>
        <h4>Contacta con el administrador en caso de tener problemas con el llenado de este formulario</h4>
        <fieldset>
        <input value="{{$licitacion->nombre}}" name="nombre" placeholder="Nombre de la licitacion" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input value="{{$licitacion->folio}}" name="folio" placeholder="Folio" type="text" tabindex="2" required>
        </fieldset>
        <fieldset>
        <h4>Fecha de elaboracion: <input value="{{$licitacion->fecha_elaboracion}}" name="fecha_elaboracion"type="date" tabindex="4" required></h4>
        </fieldset>
        <fieldset>
        <h4>Fecha de recepcion: <input value="{{$licitacion->fecha_recepcion}}" name="fecha_recepcion" type="date" tabindex="4" required></h4>
        </fieldset>
        <fieldset>
        <input value="{{$licitacion->plazo_dias}}" name="plazo_dias" placeholder="Plazo de dias" type="text" tabindex="2" required>
        </fieldset>
        @if($licitacion->formato_fecha == 'Habiles')
            <fieldset>
            <h4>Formato de fecha: <select name="formato_fecha" value="">
            <option value="Habiles">Habiles</option>
            <option value="Naturales">Naturales</option>
            </select>
            </h4>
            </fieldset>
        @endif
        @if($licitacion->formato_fecha == 'Naturales')
            <fieldset>
            <h4>Formato de fecha: <select name="formato_fecha" value="">
            <option value="Naturales">Naturales</option>
            <option value="Habiles">Habiles</option>
            </select>
            </h4>
            </fieldset>
        @endif
        <fieldset>
        <button name="guardar" type="submit">Guardar</button>
        </fieldset>
    </form>
</div>
@endsection