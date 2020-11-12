<h1>Resta de varios valores</h1>
{{$variable ?? 'No existe la variable'}}
<?php
    /* En php no se necesita declarar una variable para utilizarla
    todas las cariavles comienzan con $ */
    $variable=1000;
    $variable1=80;
    $variable2=50;
    $variable3=-60;
    $variable4=50;
    $resta= $variable- $variable1-$variable2-$variable3-$variable4;
    ?>
<p> El primer número es: {{$variable}} </p>
<p> El segundo número es: 25</p>
<h2> La suma es: </h2>
    {{$suma}}
<br>
<br>
{{date('Y')}}
{{--me asuste--}}
