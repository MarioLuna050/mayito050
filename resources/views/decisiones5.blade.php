@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Decisiones 5</h2>
    <h3>2.05. Realice un programa que, con base en una calificación proporcionada (0-10),
        indique con letra la calificación que le corresponde:
        • 10 es “A” • 9 es “B” • 8 es “C” • 7 y 6 son “D” • 5 a 0 son “F”</h3>
@stop
@section('content')
    La calificacion es {{$calif}}
    <br>
    La letra correspondiente es {{$letra}}
@stop
@section('footer')
    Laravel
    5°E
@stop
