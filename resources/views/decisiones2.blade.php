@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Decisiones 2</h2>
    <h3>2.02. Realice un programa para determinar el sueldo semanal de un trabajador
        con base en las horas trabajadas y el pago por hora,
        considerando que después de las 40 horas cada hora se considera como excedente
        y se paga el doble.</h3>
@stop
@section('content')
    El pago por hora es  {{$pph}}
    <br>
    Las horas trabajadas son {{$horas}}
    <br>
    El sueldo final es {{$sueldo}}
@stop
@section('footer')
    Laravel
    5°E
@stop
