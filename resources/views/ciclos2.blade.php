@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>ciclos 2</h2>
    <h3>3.02. Se requiere un programa para determinar,
        de N cantidades, cuántas son cero, cuántas son menores a cero,
        y cuántas son mayores a cero.</h3>
@stop
@section('content')
    La cantidad de numeros mayores a 0 es {{$mayores}}
    <br>
    La cantidad de numeros menores a 0 es {{$menores}}
    <br>
    La cantidad de numeros iguales a 0 es  {{$iguales}}
    <br>
@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop
