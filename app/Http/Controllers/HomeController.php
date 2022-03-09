<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $solicitudes_procesadas = Ficha::whereNotNull('updated_at')->count();

        $fecha = Carbon::now()->format('Y-m-d');

        $registros_trabajados = DB::select(DB::raw("
            select count(*) as cantidad
            from fichas
            where date_format(updated_at,'%Y-%m-%d') = '$fecha'
        "
        ));

        foreach($registros_trabajados as $row) {
            $solicitudes_procesadas = $row->cantidad;
        }

        $citas_programadas = Ficha::where('fecha_cita', $fecha)->count();
        /* $sin_cita = DB::table('fichas')
           ->whereNull('fecha_cita')
           ->orWhere('fecha_cita','!=', $fecha)
           ->orWhereNotNull('updated_at')
           ->count(); */
        $atendidas_sin_cita = DB::select(DB::raw("
            select count(*) as cantidad
            from fichas
            where ( fecha_cita != '$fecha' OR fecha_cita is null)
             and date_format(updated_at,'%Y-%m-%d') = '$fecha'"
        ));

        foreach($atendidas_sin_cita as $sin_cita) {
            $sin_cita_cantidad = $sin_cita->cantidad;
        }

        return view('home', compact('solicitudes_procesadas', 'citas_programadas','sin_cita_cantidad'));
    }
}
