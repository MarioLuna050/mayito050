@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Decisiones 4</h2>
    <h3>2.04. El dueño de un estacionamiento requiere un programa que
        le permita determinar cuánto debe cobrar por el uso del estacionamiento
        a sus clientes. Las tarifas que se tienen son las siguientes:
        • Las dos primeras horas a $5.00 c/u. • Las siguientes tres a $4.00 c/u.
        • Las cinco siguientes a $3.00 c/u. • Después de diez horas el costo por cada una es de $2.0</h3>
@stop
@section('content')
    Las horas estacionado son {{$horas}}
    <br>
    El total a pagar es  {{$pago}}
@stop
@section('footer')
    Laravel
    5°E
@stop
