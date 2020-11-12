
@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Decisiones 1</h2>
    <h3>2.01. Realice un programa para determinar si una persona
        puede votar con base en su edad en las próximas elecciones.</h3>
@stop
@section('content')
     La edad es {{$edad}}
    <br>
    El usuario {{$voto}} votar
@stop
@section('footer')
    Laravel
    5°E
@stop

