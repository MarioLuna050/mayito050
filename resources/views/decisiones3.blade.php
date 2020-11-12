@extends('layouts.master')
@section('head')
    <h2>Mario Luna</h2>
    <h2>Decisiones 3</h2>
    <h3>2.03. El 14 de febrero una persona desea comprarle un
        regalo al ser querido que más aprecia en ese momento,
        su dilema radica en qué regalo puede hacerle,
        las alternativas que tiene son las siguientes:
        • Tarjeta $10.00 o menos • Chocolates $11.00 a $100.00
        • Flores $101.00 a $250.00 • Joyas más de $251.00 Se requiere
        un programa que ayude a determinar qué regalo se le puede comprar
        a ese ser tan especial por el día del amor y la amistad.</h3>
@stop
@section('content')
    El dinero que tiene es {{$dinero}}
    <br>
    El regalo es  {{$regalo}}
@stop
@section('footer')
    Laravel
    5°E
@stop
