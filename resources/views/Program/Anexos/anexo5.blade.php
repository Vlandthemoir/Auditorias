@extends('Layout')

@section('title')
Anexo de adjuducacion directa
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
    <img src="{{asset('anexos/anexo51.jpg')}}" alt="">
    <img src="{{asset('anexos/anexo52.jpg')}}" alt="">
</div>
@endsection