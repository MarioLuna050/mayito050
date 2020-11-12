@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>ciclos 4 </h2>
    <h3>3.04. Realice un programa
        para leer las calificaciones de N alumnos y
        determine el número de aprobados y reprobados.</h3>
@stop
@section('content')
    La cantidad de alumnos aprobados es {{$apr}}
    <br>
    La cantidad de alumnos reprobados es {{$rep}}
@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop
