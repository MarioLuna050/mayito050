<body>
<nav>
    @section('navbar')
        <table class="table-dark">
            <thead>
            <tr>
                <td scope="col"><a href="{{route('secuencial1')}}">Secuencial1</a></td>
                <td scope="col"><a href="{{route('secuencial2')}}">Secuencial2</a></td>
                <td scope="col"><a href="{{route('secuencial3')}}">Secuencial3</a></td>
                <td scope="col"><a href="{{route('secuencial4')}}">Secuencial4</a></td>
                <td scope="col"><a href="{{route('secuencial5')}}">Secuencial5</a></td>
            </tr>
            </thead>
        <br>
            <tr>
                <td scope="col"><a href="{{route('decision1')}}">Decisiones1</a></td>
                <td scope="col"><a href="{{route('decision2')}}">Decisiones2</a></td>
                <td scope="col"><a href="{{route('decision3')}}">Decisiones3</a></td>
                <td scope="col"><a href="{{route('decision4')}}">Decisiones4</a></td>
                <td scope="col"><a href="{{route('decision5')}}">Decisiones5</a></td>
            </tr>
            <br>
            <tr>
                <td scope="col"><a href="{{action('EstructurasDeControl@ciclos1')}}">Ciclos1</a></td>
                <td scope="col"><a href="{{action('EstructurasDeControl@ciclos2')}}">Ciclos2</a></td>
                <td scope="col"><a href="{{action('EstructurasDeControl@ciclos3')}}">Ciclos3</a></td>
                <td scope="col"><a href="{{action('EstructurasDeControl@ciclos4')}}">Ciclos4</a></td>
                <td scope="col"><a href="{{action('EstructurasDeControl@ciclos5')}}">Ciclos5</a></td>
            </tr>

        </table>

    @show
</nav>
