@extends('Layout')

@section('title')
Auditoria de adjudicacion directa
@endsection
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
@section('content')
<div class="container">
<h1>Progreso de los anexos:{{$porcentaje}}%
        <progress max="100" value="{{$porcentaje}}" class="php"> 
        @if ($porcentaje <= 25)
            <style>
                progress[value]::-moz-progress-bar {
                background-image:-moz-linear-gradient( 135deg,transparent,
                    transparent 33%,rgba(0,0,0,.1) 33%,rgba(0,0,0,.1) 66%,transparent 66%),
                    -moz-linear-gradient( top,rgba(255, 255, 255, .25),rgba(0,0,0,.2)),
                    -moz-linear-gradient( left,red,red);
                background-size: 35px 20px, 100% 100%, 100% 100%;
                border-radius:3px;
                }
            </style>
        @endif
        @if ($porcentaje > 25 && $porcentaje <= 50)
            <style>
                progress[value]::-moz-progress-bar {
                background-image:-moz-linear-gradient( 135deg,transparent,
                    transparent 33%,rgba(0,0,0,.1) 33%,rgba(0,0,0,.1) 66%,transparent 66%),
                    -moz-linear-gradient( top,rgba(255, 255, 255, .25),rgba(0,0,0,.2)),
                    -moz-linear-gradient( left,orange,orange);
                background-size: 35px 20px, 100% 100%, 100% 100%;
                border-radius:3px;
                }
            </style>
        @endif
        @if ($porcentaje > 50 && $porcentaje <= 75)
            <style>
                progress[value]::-moz-progress-bar {
                background-image:-moz-linear-gradient( 135deg,transparent,
                    transparent 33%,rgba(0,0,0,.1) 33%,rgba(0,0,0,.1) 66%,transparent 66%),
                    -moz-linear-gradient( top,rgba(255, 255, 255, .25),rgba(0,0,0,.2)),
                    -moz-linear-gradient( left,yellow,yellow);
                background-size: 35px 20px, 100% 100%, 100% 100%;
                border-radius:3px;
                }
            </style>
        @endif
        @if ($porcentaje > 75 && $porcentaje <= 100)
            <style>
                progress[value]::-moz-progress-bar {
                background-image:-moz-linear-gradient( 135deg,transparent,
                    transparent 33%,rgba(0,0,0,.1) 33%,rgba(0,0,0,.1) 66%,transparent 66%),
                    -moz-linear-gradient( top,rgba(255, 255, 255, .25),rgba(0,0,0,.2)),
                    -moz-linear-gradient( left,green,green);
                background-size: 35px 20px, 100% 100%, 100% 100%;
                border-radius:3px;
                }
            </style>
        @endif
    </h1>
    <table class="table">
        <tr>
            <th rowspan="2">SOLICITUD DE ADQUISICIÓN</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado1 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado2 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado3 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">TRÁMITE DE PAGO</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado4 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado5 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">SEGUIMIENTO</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado6 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
        <tr>
            <th rowspan="2">RENDICION DE CUENTA PUBLICA</th>
            <th rowspan="2">Se cuenta con informacion</th>
            <th colspan="3">Acciones</th>
            <th rowspan="2">Area que genera la informacion</th>
        </tr>
        <tr>
            <th>Añadir archivo</th>
            <th>Añadir comentario</th>
            <th>Enviar</th>
        </tr>
        @foreach ($resultado7 as $item )
        <tr>
            <form method="POST" action="{{route('documentos.store',$item->id)}}" enctype="multipart/form-data">
                @method("PUT")
                @csrf
                <td>{{$item->requisito}}</td>
                <td>
                    @if ($item->informacion_estado == "")
                    <select name="informacion_estado">
                        <option value="" disabled selected>Seleccionar</option>
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "si")
                    <select name="informacion_estado">
                        <option value="si">si</option>
                        <option value="no">no</option>
                    </select>
                    @endif
                    @if ($item->informacion_estado == "no")
                    <select name="informacion_estado">
                        <option value="no">no</option>
                        <option value="si">si</option>
                    </select>
                    @endif
                </td>
                <td>
                    @if ($item->ruta_documento == "")
                    <input type="file" id="add_document" name="documento"><br><br>
                    @else
                    <label for="">Su documento se encuentra en revision</label>
                    @endif
                </td>
                <td><input type="text" name="comentario" value="{{$item->comentario}}"></td>
                @if ($item->ruta_documento == "")
                <td><button>Enviar</button></td>
                @else    
                    @if (auth()->user()->tipo_usuario == 'Administrador')
                        <td>
                            <a href="{{route('documentos.regresar',$item->id)}}">Regresar documento</a>   
                        </td>   
                    @endif
                    @if (auth()->user()->tipo_usuario == 'Cliente')
                        <td><button style="display:none;">Enviar</button></td>
                    @endif
                @endif
                <td>{{$item->area}}</td>
            </form>
        </tr>
        @endforeach
    </table>
</div>
@endsection