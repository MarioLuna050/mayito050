@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>ciclos 3</h2>
    <h3>3.03. Se desea saber el total de una caja registradora de un almacén,
        se conoce el número de billetes y monedas,
        7así como su valor. Realice un programa para determinar el total.</h3>
@stop
@section('content')
    El  total de billetes y monedas  es {{$acumulado}}
    <br>
@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop

