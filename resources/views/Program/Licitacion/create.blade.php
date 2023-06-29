@extends('Layout')

@section('title')
Nueva licitacion
@endsection
<link href="{{ asset('css/Licitacion/create.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
    <form id="contact" action="{{route('licitacion.store')}}" method="post">
        @csrf
        <h3>Registro de licitaciones</h3>
        <h4>Contacta con el administrador en caso de tener problemas con el llenado de este formulario</h4>
        <fieldset>
        <input name="nombre" placeholder="Nombre de la licitacion" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input name="folio" placeholder="Folio" type="text" tabindex="2" required>
        </fieldset>
        <fieldset>
        <h4>Area de la licitacion: <select name="area" value="">
            <option value="" disabled selected>Seleccionar</option>
            <option value="Documentos a integrar">Documentos a integrar</option>
            <option value="Contratacion de personal">Contratacion de personal</option>
            <option value="Compras menores">Compras menores</option>
            <option value="Invitacion restringida">Invitacion restringida</option>
            <option value="Adjudicacion directa">Adjudicacion directa</option>
            <option value="Licitacion publica">Licitacion publica</option>
        </select>
        </h4>
        </fieldset>
        <fieldset>
        <h4>Fecha de elaboracion: <input name="fecha_elaboracion"type="date" tabindex="4" required></h4>
        </fieldset>
        <fieldset>
        <h4>Fecha de recepcion: <input name="fecha_recepcion" type="date" tabindex="4" required></h4>
        </fieldset>
        <fieldset>
        <input name="plazo_dias" placeholder="Plazo de dias" type="text" tabindex="2" required>
        </fieldset>
        <fieldset>
        <h4>Formato de fecha: <select name="formato_fecha" value="">
            <option value="" disabled selected>Seleccionar</option>
            <option value="Habiles">Habiles</option>
            <option value="Naturales">Naturales</option>
        </select></h4>
        </fieldset>
        <fieldset>
        <button name="guardar" type="submit">Guardar</button>
        </fieldset>
    </form>
</div>
@endsection