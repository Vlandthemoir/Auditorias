<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/Layout.css')}}">
    <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>@yield('title')</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    @if(auth()->user()->tipo_usuario == 'Cliente')
                    <i class="fa-solid fa-user"></i>
                    @endif
                    @if(auth()->user()->tipo_usuario == 'Administrador')
                    <i class="fa-solid fa-user-tie"></i>
                    @endif
                </span>
                <div class="text logo-text">
                    <span class="name">{{ auth()->user()->usuario }}</span>
                    <span class="profession">{{ auth()->user()->tipo_usuario }}</span>
                </div>
            </div>
            <i class='fa-solid fa-caret-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                @if(auth()->user()->tipo_usuario == 'Cliente')
                    <li class="nav-link">
                        <a href="{{route('licitacion.create')}}" title="Nueva licitación">
                            <i  class="fa-solid fa-file-circle-plus icon"></i>
                            <span class="text nav-text">Nueva licitación</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('licitacion.index')}}" title="Mis licitaciones">
                            <i  class="fa-solid fa-folder icon"></i>
                            <span class="text nav-text">Mis licitaciones</span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->tipo_usuario == 'Administrador')
                    <li class="nav-link">
                        <a href="{{route('usuarios.create')}}" title="Nuevo usuario">
                            <i  class="fa-solid fa-user-plus icon"></i>
                            <span class="text nav-text">Nuevo usuario</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('usuarios.index')}}" title="Todos los usuarios">
                            <i  class="fa-solid fa-users icon"></i>
                            <span class="text nav-text">Todos los usuarios</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('licitacion.create')}}" title="Nueva licitación">
                            <i  class="fa-solid fa-file-circle-plus icon"></i>
                            <span class="text nav-text">Nueva licitación</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('licitacion.index')}}" title="Mis licitaciones">
                            <i  class="fa-solid fa-folder icon"></i>
                            <span class="text nav-text">Mis licitaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('licitacion.all')}}" title="Todas las licitaciones">
                            <i  class="fa-solid fa-box-archive icon"></i>
                            <span class="text nav-text">Todas las licitaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{route('descargar.all')}}" title="Descargar documentos">
                            <i  class="fa-solid fa-file-zipper icon"></i>
                            <span class="text nav-text">Descargar documentos</span>
                        </a>
                    </li>
                @endif
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="{{route('login.destroy')}}" title="Cerrar sesión">
                        <i class="fa-solid fa-right-from-bracket icon"></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>                
            </div>
        </div>
    </nav>
    <section class="home">
        <div class="text">@yield('title')</div>
        <div class="general-container">
			@yield('content')
		</div>
    </section>
    <script src="{{asset('JS/layout.js')}}"></script>
</body>
</html>