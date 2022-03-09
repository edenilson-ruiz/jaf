<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use NumerosEnLetras;
use Luecano\NumeroALetras\NumeroALetras;

class NumeroLetrasController extends Controller
{
    public function index()
    {
        $cv = new NumerosEnLetras();
        echo 'Formato #1 2137.93 =>' . $cv->convertir(2137.93) . '<br>';

        echo 'Formato #2 2137.93 =>' . NumerosEnLetras::convertir(2137.93,'dolares',false,'centavos') . '<br>';

        echo 'Formato #3 1988208.99 =>' . NumerosEnLetras::convertir(1988208.99,'Dólares',true) . '<br>';

        $formatter = new NumeroALetras();
        echo $formatter->toMoney(2500.90, 2, 'DÓLARES DE LOS ESTADOS UNIDOS DE AMERICA', 'CENTAVOS');

        $a='<h1>Convertir números a letras PHP</h1>';
        echo $a;

        $formatter = new NumeroALetras();
        echo $formatter->toMoney(10.10, 2, 'SOLES', 'CENTIMOS');

        echo '<br>';

        $fecha = '1974-10-28';
        $fecha_letras = $this->convertirFechaALetras($fecha);
        echo $fecha_letras;

        echo '<br>';

        $dui = '02090668-2';
        $dui_letras = $this->convertirDUIALetras($dui);
        echo $dui_letras;

        echo '<br>';
        $tiempo = '16:25:25';
        $tiempo_letras = $this->convertirHoraALetras($tiempo);
        echo $tiempo_letras;

    }

    public function convertirDUIALetras($dui)
    {
        $arr = str_split($dui);

        $conversion = '';

        foreach ($arr as $value) {
            switch ($value) {
                case '1':
                    $conversion .= 'uno ';
                    break;
                case '2':
                    $conversion .= 'dos ';
                    break;
                case '3':
                    $conversion .= 'tres ';
                    break;
                case '4':
                    $conversion .= 'cuatro ';
                    break;
                case '5':
                    $conversion .= 'cinco ';
                    break;
                case '6':
                    $conversion .= 'seis ';
                    break;
                case '7':
                    $conversion .= 'siete ';
                    break;
                case '8':
                    $conversion .= 'ocho ';
                    break;
                case '9':
                    $conversion .= 'nueve ';
                    break;
                case '0':
                    $conversion .= 'cero ';
                    break;
                case '-':
                    $conversion .= 'guión ';
                    break;
                default:
                    $conversion .= '';
                    break;
            }
        }

        return $conversion;
    }

    public function convertirFechaALetras($fecha)
    {
        $resultado      = '';
        $year           = '';
        $month          = '';
        $day            = '';
        $fecha_exploded = explode('-',$fecha);
        $cv = new NumerosEnLetras();
        $year .= $cv->convertir($fecha_exploded[0]);

        switch (intval($fecha_exploded[1])) {
            case '1':
                $month .= 'de enero ';
                break;
            case '2':
                $month .= 'de febrero ';
                break;
            case '3':
                $month .= 'de marzo ';
                break;
            case '4':
                $month .= 'de abril ';
                break;
            case '5':
                $month .= 'de mayo ';
                break;
            case '6':
                $month .= 'de junio ';
                break;
            case '7':
                $month .= 'de julio ';
                break;
            case '8':
                $month .= 'de agosto ';
                break;
            case '9':
                $month .= 'de septiembre ';
                break;
            case '10':
                $month .= 'de octubre ';
                break;
            case '11':
                $month .= 'de noviembre ';
                break;
            case '12':
                $month .= 'de diciembre ';
                break;
            default:
                $month .= '';
                break;
        }

        $day = $cv->convertir($fecha_exploded[2]);

        $resultado = $day .' '.$month.' de '.$year;

        return $resultado;
    }

    public function convertirHoraALetras($hora)
    {
        // TODO: terminar funcion de convertir hora a letras
        $resultado      = '';
        $horas           = '';
        $minutos        = '';
        $segundos       = '';
        $hora_exploded = explode(':',$hora);
        $cv = new NumerosEnLetras();
        $horas      .= $cv->convertir($hora_exploded[0]);
        $minutos    .= $cv->convertir($hora_exploded[1]);
        $segundos   .= $cv->convertir($hora_exploded[2]);

        if (intval($hora_exploded[0]) == 0 && intval($hora_exploded[1]) == 0) {
            $resultado = 'cero horas ';
        } elseif(intval($hora_exploded[0]) == 0 && intval($hora_exploded[1]) == 1) {
            $resultado = 'cero horas con '.$minutos. 'minuto';
        } elseif(intval($hora_exploded[1]) == 0  && intval($hora_exploded[1]) > 1) {
            $resultado = $horas .' horas con '.$minutos. 'minutos';
        } elseif(intval($hora_exploded[0]) > 0 && intval($hora_exploded[1]) == 0) {
            $resultado = $horas .' horas ';
        } elseif(intval($hora_exploded[0]) > 0 && intval($hora_exploded[1]) == 1) {
            $resultado = $horas .' horas con '.$minutos. 'minuto';
        } elseif(intval($hora_exploded[0]) > 0 && intval($hora_exploded[1]) > 1) {
            $resultado = $horas .' horas con '.$minutos. 'minutos';
        } else {
            $resultado = $horas .' horas con '.$minutos. 'minutos';
        }

        return $resultado;
    }
}
