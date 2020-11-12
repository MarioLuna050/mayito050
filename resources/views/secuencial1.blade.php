@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Secuencial 1</h2>
    <h3>1.1. Calcular el área de un trapecio</h3>
@stop
@section('content')
    el area del trapecio {{$resultado}}
    <br>
    la base menor {{$menor}}
    <br>
    La base mayor {{$mayor}}
    <br>
    La altura {{$altura}}
    <br>
@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop
