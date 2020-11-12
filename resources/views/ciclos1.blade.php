

@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>ciclos 1</h2>
    <h3>Ciclos 3.01. Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10
        % anual durante 6 años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en
        cada uno de los 6 años? Realice un programa que resuelva el problema.</h3>
@stop
@section('content')

@for($i=1; $i<=6; $i++)
El incremento del {{$i}} año es {{$incremento[$i]}}
<br>
@endfor
@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop
