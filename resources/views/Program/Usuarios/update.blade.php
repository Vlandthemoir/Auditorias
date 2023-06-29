@extends('Layout')

@section('title')
Actualizacion de datos
@endsection
<link href="{{ asset('css/Usuarios/create.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
<form id="contact" method="post" action="{{route('usuarios.update',$usuarios->id)}}">
        @csrf
        @method("PUT")
        <h3>Actualizar datos</h3>
        <h4>Contacta con el administrador en caso de tener problemas con el llenado de este formulario</h4>
        <fieldset>
        <input value="{{$usuarios->usuario}}" name="usuario" placeholder="Nombre del usuario" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input value="{{$usuarios->correo_electronico}}" name="correo_electronico" placeholder="Email" type="email" tabindex="2" required>
        </fieldset>

        @if($usuarios->tipo_usuario == 'Cliente')
            <fieldset>
            <h4>Tipo de usuario: <select name="tipo_usuario" value="">
                <option value="Cliente">Cliente</option>
                <option value="Administrador">Administrador</option>
            </select>
            </h4>
            </fieldset>
        @endif
        @if($usuarios->Tipo_usuario == 'Administrador')
            <fieldset>
            <h4>Tipo de usuario: <select name="tipo_usuario" value="">
                <option value="Administrador">Administrador</option>
                <option value="Cliente">Cliente</option>
            </select>
            </h4>
            </fieldset>
        @endif
        <fieldset>
        <input name="contraseña" placeholder="Contraseña" type="password" tabindex="2" required>
        </fieldset>
        <fieldset>
        <button name="guardar" type="submit">Guardar</button>
        </fieldset>
    </form>
</div>
@endsection