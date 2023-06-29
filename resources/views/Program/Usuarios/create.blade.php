@extends('Layout')

@section('title')
Nuevo usuario
@endsection
<link href="{{ asset('css/Usuarios/create.css') }}" rel="stylesheet">
@section('content')
<div class="container">  
    <form id="contact" action="{{route('usuarios.store')}}" method="post">
        @csrf
        <h3>Registro de usuarios</h3>
        <h4>Contacta con el administrador en caso de tener problemas con el llenado de este formulario</h4>
        <fieldset>
        <input name="usuario" placeholder="Nombre del usuario" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
        <input name="correo_electronico" placeholder="Email" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
        <h4>Tipo de usuario: <select name="tipo_usuario" value="">
            <option value="" disabled selected>Seleccionar</option>
            <option value="Cliente">Cliente</option>
            <option value="Administrador">Administrador</option>
        </select>
        </h4>
        </fieldset>
        <fieldset>
        <input name="contraseña" placeholder="Contraseña" type="password" tabindex="2" required>
        </fieldset>
        <fieldset>
        <button name="guardar" type="submit">Guardar</button>
        </fieldset>
    </form>
</div>
@endsection