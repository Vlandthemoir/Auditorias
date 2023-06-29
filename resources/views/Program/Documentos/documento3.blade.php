@extends('Layout')

@section('title')
Auditoria de compras menores
@endsection
<link href="{{ asset('css/documentos.css') }}" rel="stylesheet">
@section('content')
<div class="container"> 
<h1>Progreso de los anexos:{{number_format($porcentaje,2)}}% <progress max="100" value="{{$porcentaje}}" class="php"></h1>
    <table class="table">
        <tr>
            <th rowspan="2">Solicitud de adquisicion</th>
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
            <th rowspan="2">Recepcion de insumos medicos, administrativos y activos fisicos</th>
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
            <th rowspan="2">Tramite de pago</th>
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
            <th rowspan="2">Seguimiento</th>
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
            <th rowspan="2">Rendicion de la cuenta publica</th>
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
    </table>
</div>
@endsection