@extends('Layout')

@section('title')
Anexo de invitacion restringida
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
    <img src="{{asset('anexos/anexo41.jpg')}}" alt="">
    <img src="{{asset('anexos/anexo42.jpg')}}" alt="">
</div>
@endsection