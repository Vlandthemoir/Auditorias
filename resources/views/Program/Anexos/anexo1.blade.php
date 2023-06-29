@extends('Layout')

@section('title')
Anexo de documentos a integrar
@endsection
<link href="" rel="stylesheet">
@section('content')
<style>
    .container {
        display: grid;
        background-color: none;
    }
</style>
<div class="container">  
    <img src="{{asset('anexos/anexo1.jpg')}}" alt="">
</div>
@endsection