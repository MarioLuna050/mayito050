<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructurasDeControl extends Controller
{
    public function  welcome(){
        return redirect()->action('EstructurasDeControl@archivo');

    }
    public function archivo ()
    {
        return view('archivo');
    }

    public function secuencial1($mayor=3,$menor=5,$h=5)
    {

        $resultado = (($mayor + $menor) * $h) / 2;
        return view('secuencial1', ['menor' => $menor, 'mayor' => $mayor,
            'altura' => $h, 'resultado' => $resultado]);
    }

    public function secuencial2($lado=6)
    {

        $apotema=$lado/2;
        return view('secuencial2',['apotema'=>$apotema, 'lado'=> $lado]);

    }

    public function secuencial3($radio=3, $altura=5)
    {
        $volumen=(($radio*$radio)* pi() * $altura)/3;
        return view('secuencial3',['volumen'=> $volumen,
            'radio' => $radio,
            'altura'=>$altura]);
    }

    public function secuencial4($base=6, $altura=6)
    {
        $area=($base*$altura)/2;
        return view('secuencial4',['area'=> $area,
            'base' => $base,
            'altura'=>$altura]);
    }

    public function secuencial5($radio=8)
    {
        $circunferencia=2*pi()*$radio;
        return view('secuencial5',['circunferencia'=> $circunferencia,
            'radio' => $radio]);

    }

    public function decision1()
    {
        $edad=18;
        if ($edad >=18) $voto='si puede';
        else $voto = 'No puede';

        return view('decisiones1')
            -> with('voto', $voto)
            -> with('edad', $edad);
    }

    public function decision2()
    {
        $pph=130;
        $horas=57;
        $sueldo=00;
        if($horas>40) {
            $extra = ($horas - 40);
            $sueldo=($extra*(2*$pph))+40*$pph;}
        else
            $sueldo=($horas*$pph);

        return view('decisiones2')
            ->with('pph', $pph)
            ->with('horas', $horas)
            ->with('sueldo', $sueldo);
    }
    public function decision3()
    {
        $dinero=180;
        $regalo=0;
        if ($dinero<=10) $regalo="tarjeta" ;
        elseif ($dinero<=100) $regalo="chocolates";
        elseif ($dinero<=250)$regalo="Flores";
        else $regalo="joyas";
        return view('decisiones3')
            ->with('regalo',$regalo)
            ->with('dinero',$dinero);
    }
    public function decision4()
    {
        $horas=4;
        $pago=0;
        if ($horas<=2) $pago=$horas* 5 ;
        elseif ($horas<=5) $pago=(($horas-2)*4)+10;
        elseif ($horas<=10)$pago=(($horas-5)*3)+22;
        else $pago=37+(($horas-10)*2);
        return view('decisiones4')
            ->with('horas',$horas)
            ->with('pago',$pago);
    }
    public function decision5()
    {
        $calif=9;
        $letra ='';
        if($calif>=9.5)
            $letra= 'letra es A';
        elseif($calif>=8.5)
            $letra='La letra es B';
        elseif($calif>=7.5)
            $letra='La letra es C';
        elseif($calif>=6.5)
            $letra='La letra es D';
        elseif($calif>=6)
            $letra= 'La letra es E';
        else
            $letra=' La letra es F';
        return view('decisiones5')
            ->with('letra',$letra)
            ->with('calif',$calif);
    }

    public function ciclos1(){
        $salario= 1500;
        $incremento= array();

        for ($i=1; $i<=6; $i++){
            $incremento[$i]= ($salario*.10)+$salario;
            $salario= $incremento[$i];
        }
        return view('ciclos1', ['incremento'=> $incremento]);
    }

    public function ciclos2(){
        $numero=rand(-15,10);
        $mayores=0;
        $menores=0;
        $iguales=0;

        while($numero==10){
            if ($numero>0) $mayores=$mayores+1;
            else if ($numero<0) $menores=$menores+1;
            else $iguales=$iguales+1;
        }
        return view('ciclos2',['mayores'=>$mayores,
            'menores'=> $menores,
            'iguales' => $iguales]);
    }

    public function ciclos3(){
        $nobilletes=[100, 500, 50, 1000, 20];
        $nomonedas=[5,10,2,1,10];
        $total=0;
        $acumulado=0;

        for ($i=0; $i<5; $i++){
            $total= $nobilletes[$i]  + $nomonedas[$i]+ $acumulado;
            $acumulado=$total;
        }

        return view('ciclos3',['acumulado'=> $acumulado]);
    }

    public function ciclos4(){
        $calif=0;
        $apr=0;
        $rep=0;
        for ($i=1;$i<=15; $i++){
            $calif=rand(0,10);
            if ($calif>=6) $apr=$apr+1;
            else $rep=$rep+1;
        }


        return view('ciclos4', ['apr'=>$apr, 'rep'=>$rep]);
    }

    public function ciclos5(){
        $k=15;
        $i=1;
        $t=[];
     for ($i=1; $i<=$k; $i++){
         $t[$i]=$i*$k;
     }
        return view('ciclos5',['i'=>$i, "t"=>$t, 'k'=>$k]);
    }
}
