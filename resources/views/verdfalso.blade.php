
<h1>¿Cúal variable es mayor?</h1>
<?php
$variable = 1;
$variables = 8;

?>

@if($variable > $variables)
    <p>{{$variables}} es menor y {{$variable}} es mayor  </p>
@else
    <p>{{$variable}} es menor y {{$variables}} es mayor</p>
@endif


