@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>ciclos 4 </h2>
    <h3>3.05. Realice un programa para obtener la tabla de multiplicar
        de un entero K comenzando desde el 1.3.05. Realice un programa para obtener
        la tabla de multiplicar de un entero K comenzando desde el 1.</h3>
@stop
@section('content')
@foreach($t as $i)

    <?php
    $g =0 ?>


  {{$k}} *  {{$g=$i/$k}}= {{$i}} <br>
    @endforeach

@stop
@section('footer')
    Laravel
    <br>
    5°E
@stop
