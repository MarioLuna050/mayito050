
<i><h1 style="color: darkred">Resta de varios valores</h1></i>
<h3 style="color: orangered">Mario Alberto Luna Montes 5°E  {{date('Y/M/D')}}</h3>
<?php
/* En php no se necesita declarar una variable para utilizarla
todas las cariavles comienzan con $ */
$variable=1000;
$variable1=80;
$variable2=50;
$variable3=-60;
$variable4=50;
$resta= ($variable)-($variable1)-($variable2)-($variable3)-($variable4);
?>
<p> El primer número es: {{$variable}} </p>
<p> El segundo número es: {{$variable1}}</p>
<p> El tercer número es: {{$variable2}}</p>
<p> El cuarto número es: {{$variable3}}</p>
<p> El quinto número es: {{$variable4}}</p>

<i> <h2 style="color: red"> La resta de todos los valores es </h2></i>
{{$resta}}
