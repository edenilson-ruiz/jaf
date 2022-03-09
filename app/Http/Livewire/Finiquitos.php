<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Finiquito;

use App\Models\Transaccion;
use Barryvdh\DomPDF\Facade as PDF;

use NumerosEnLetras;
use Luecano\NumeroALetras\NumeroALetras;

class Finiquitos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $empleado_nombre_completo, $empleado_nombres, $empleado_apellidos, $empleado_plaza, $empleado_num_plazas, $unidad_presupuestaria, $linea_de_trabajo, $unidad_presupuestaria_mas_linea_de_trabajo, $sumatoria_de_horas_laboradas, $empleado_fecha_ingreso, $empleado_dui, $pagaduria, $porcentaje_tiempo_laborado, $criterio_sumatoria_horas, $monto_bruto_compensacion, $empleado_municipio, $empleado_departamento, $empleado_ocupacion, $carpeta_centro, $esta_en_litigio, $fecha_firma, $hora_firma;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.finiquitos.view', [
            'finiquitos' => Finiquito::orderBy('id')
						->orWhere('empleado_nombres', 'LIKE', $keyWord)
						->orWhere('empleado_apellidos', 'LIKE', $keyWord)
						->orWhere('empleado_fecha_ingreso', 'LIKE', $keyWord)
						->orWhere('empleado_dui', 'LIKE', $keyWord)
						->orWhere('monto_bruto_compensacion', 'LIKE', $keyWord)
						->orWhere('empleado_municipio', 'LIKE', $keyWord)
						->orWhere('empleado_departamento', 'LIKE', $keyWord)
						->orWhere('empleado_ocupacion', 'LIKE', $keyWord)
						->orWhere('carpeta_centro', 'LIKE', $keyWord)
						->orWhere('esta_en_litigio', 'LIKE', $keyWord)
						->orWhere('fecha_firma', 'LIKE', $keyWord)
						->orWhere('hora_firma', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->empleado_nombres = null;
		$this->empleado_apellidos = null;
		$this->empleado_fecha_ingreso = null;
		$this->empleado_dui = null;
		$this->monto_bruto_compensacion = null;
		$this->empleado_municipio = null;
		$this->empleado_departamento = null;
		$this->empleado_ocupacion = null;
		$this->carpeta_centro = null;
		$this->esta_en_litigio = null;
		$this->fecha_firma = null;
		$this->hora_firma = null;
    }

    public function store()
    {
        $this->validate([
		'empleado_nombres' => 'required',
		'empleado_apellidos' => 'required',
		'empleado_fecha_ingreso' => 'required',
		'empleado_dui' => 'required',
		'monto_bruto_compensacion' => 'required',
		'empleado_municipio' => 'required',
		'empleado_departamento' => 'required',
		'empleado_ocupacion' => 'required',
		'carpeta_centro' => 'required',
		'esta_en_litigio' => 'required',
		'fecha_firma' => 'required',
		'hora_firma' => 'required',
        ]);

        Finiquito::create([
			'empleado_nombres' => $this-> empleado_nombres,
			'empleado_apellidos' => $this-> empleado_apellidos,
			'empleado_fecha_ingreso' => $this-> empleado_fecha_ingreso,
			'empleado_dui' => $this-> empleado_dui,
			'monto_bruto_compensacion' => $this-> monto_bruto_compensacion,
			'empleado_municipio' => $this-> empleado_municipio,
			'empleado_departamento' => $this-> empleado_departamento,
			'empleado_ocupacion' => $this-> empleado_ocupacion,
			'carpeta_centro' => $this-> carpeta_centro,
			'esta_en_litigio' => $this-> esta_en_litigio,
			'fecha_firma' => $this-> fecha_firma,
			'hora_firma' => $this-> hora_firma
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Finiquito Successfully created.');
    }

    public function edit($id)
    {
        $record = Finiquito::findOrFail($id);

        $this->selected_id = $id;
		$this->empleado_nombres = $record-> empleado_nombres;
		$this->empleado_apellidos = $record-> empleado_apellidos;
		$this->empleado_fecha_ingreso = $record-> empleado_fecha_ingreso;
		$this->empleado_dui = $record-> empleado_dui;
		$this->monto_bruto_compensacion = $record-> monto_bruto_compensacion;
		$this->empleado_municipio = $record-> empleado_municipio;
		$this->empleado_departamento = $record-> empleado_departamento;
		$this->empleado_ocupacion = $record-> empleado_ocupacion;
		$this->carpeta_centro = $record-> carpeta_centro;
		$this->esta_en_litigio = $record-> esta_en_litigio;
		$this->fecha_firma = $record-> fecha_firma;
		$this->hora_firma = $record-> hora_firma;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'empleado_nombres' => 'required',
		'empleado_apellidos' => 'required',
		'empleado_fecha_ingreso' => 'required',
		'empleado_dui' => 'required',
		'monto_bruto_compensacion' => 'required',
		'empleado_municipio' => 'required',
		'empleado_departamento' => 'required',
		'empleado_ocupacion' => 'required',
		'carpeta_centro' => 'required',
		'esta_en_litigio' => 'required',
		'fecha_firma' => 'required',
		'hora_firma' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Finiquito::find($this->selected_id);
            $record->update([
			'empleado_nombres' => $this-> empleado_nombres,
			'empleado_apellidos' => $this-> empleado_apellidos,
			'empleado_fecha_ingreso' => $this-> empleado_fecha_ingreso,
			'empleado_dui' => $this-> empleado_dui,
			'monto_bruto_compensacion' => $this-> monto_bruto_compensacion,
			'empleado_municipio' => $this-> empleado_municipio,
			'empleado_departamento' => $this-> empleado_departamento,
			'empleado_ocupacion' => $this-> empleado_ocupacion,
			'carpeta_centro' => $this-> carpeta_centro,
			'esta_en_litigio' => $this-> esta_en_litigio,
			'fecha_firma' => $this-> fecha_firma,
			'hora_firma' => $this-> hora_firma
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Finiquito Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Finiquito::where('id', $id);
            $record->delete();
        }
    }

    public function download($id)
    {
       $liquidaciones = Transaccion::where('id', $id)
                            ->orderBy('id')
                            //->take(1)
                            ->get();

        $lugar_firma = '';
        $filename = '';


        foreach ($liquidaciones as $row) {
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
            // $pdf = PDF::loadView('liquidacion.finiquito', $data);
            $filename = $row->id . "-". $row->carpeta_centro . "-" . $row->empleado_dui . "-" . $row->empleado_nombres . "-" . $row->empleado_apellidos . ".pdf";

            //return $pdf->download($filename);

            $pdfContent = PDF::loadView('liquidacion.finiquito', $data)->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                $filename);

                //->save(storage_path('app/public/') . $row->carpeta_centro ."/".$row->id. "-".$row->empleado_dui . '.pdf');
        }
            //dd($row);

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
