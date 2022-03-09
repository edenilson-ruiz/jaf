<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

use NumerosEnLetras;
use Luecano\NumeroALetras\NumeroALetras;

class LiquidacionController extends Controller
{
    public function index()
    {
        return view('liquidacion.index');
    }

    public function download()
    {
       //$liquidaciones = Transaccion::where('esta_en_litigio', 'NO')
       $liquidaciones = Transaccion::where('id', 17)
                            ->orderBy('id')
                            //->take(1)
                            ->get();


        // $users = User::all();
        /*$data = [
            'titulo' => 'Styde.net',
            'users' => $users,
            'liquidaciones' => $liquidaciones
        ];*/
        // $pdf = PDF::loadView('liquidacion.finiquito', $data);
        // return $pdf->stream('archivo.pdf');

        $lugar_firma = '';

        foreach ($liquidaciones->chunk(20) as $finiquitos) {

            foreach ($finiquitos as $row) {
                switch ($row->carpeta_centro) {
                    case 'CRIOR':
                        $lugar_firma = 'San Miguel';
                        break;
                    case 'CRIO':
                        $lugar_firma = 'Santa Ana';
                        break;
                    default:
                        $lugar_firma = 'San Salvador';
                        break;
                }

                $formatter = new NumeroALetras();
                $bono_letras = $formatter->toMoney($row->monto_bruto_compensacion, 2, 'DÓLARES DE LOS ESTADOS UNIDOS DE AMERICA', 'CENTAVOS');

                $data = [
                    'liquidaciones' => $row,
                    'empleado_dui_letras' => $this->convertirDUIALetras($row->empleado_dui),
                    'fecha_ingreso_empleado_letras' => $this->convertirFechaALetras($row->empleado_fecha_ingreso),
                    'lugar_firma' => $lugar_firma,
                    'fecha_firma1' => $this->convertirFechaALetras($row->fecha_firma),
                    'fecha_firma' => $this->convertirFechaALetrasFirma($row->fecha_firma),
                    'hora_firma' => $this->convertirHoraALetras($row->hora_firma),
                    'bono_letras' => $bono_letras
                ];

                // TODO: Cambiar nombre del centro para que se guarde por carpeta
                $data = PDF::loadView('liquidacion.finiquito', $data)
                    ->save(storage_path('app/public/BASE_TOTAL/') . $row->id. "-". $row->carpeta_centro . "-" . $row->empleado_dui . "-" . $row->empleado_nombres . "-" . $row->empleado_apellidos . '.pdf');

                    //->save(storage_path('app/public/') . $row->carpeta_centro ."/".$row->id. "-".$row->empleado_dui . '.pdf');
            }
            //dd($row);
        }

        echo "Archivos PDF generados";

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

        return trim($conversion);
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

        return trim($resultado);
    }

    public function convertirFechaALetrasFirma($fecha)
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

        $resultado = $day .' días del mes '.$month.' de '.$year;

        return trim($resultado);
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

        return trim($resultado);
    }
}
