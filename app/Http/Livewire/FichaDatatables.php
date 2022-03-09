<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ficha;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class FichaDatatables extends LivewireDatatable
{

    public $model = Ficha::class;

    /* public function render()
    {
        return view('livewire.ficha-datatables');
    } */

    public function builder()
    {
        return Ficha::query()
            ->where('fichas.updated_at','!=','null')
            ->leftJoin('departamentos','departamentos.id','fichas.departamento_id')
            ->leftJoin('municipios','municipios.id','fichas.municipio_id');
    }

    public function columns()
    {
        return [
            NumberColumn::name('fichas.id')
                ->label('ID')
                ->sortBy('fichas.id'),

            Column::name('fichas.nombre')
                ->label('Nombre'),

            Column::name('fichas.edad')
                ->label('Edad'),

            Column::raw('case when edad between 0 and 18 then "Niño" when edad > 18 then "Adulto" else "Sin Definir" end AS Tipo Persona'),

            Column::name('fichas.tipo_de_silla')
                ->label('Tipo de Ayuda Técnica'),

            DateColumn::name('fichas.updated_at')
                ->label('Fecha de Entrega')
                ->format('d/m/Y'),

            Column::raw('DATE_FORMAT(fichas.updated_at,"%H:%i:%s") AS Hora Entrega'),

            Column::name('departamentos.name')
                ->label('Departamento'),

            Column::name('municipios.name')
                ->label('Municipio'),

            Column::raw('1 AS Cantidad')
        ];
    }

    public function buildActions()
    {
        return [
            Action::groupBy('Export Options', function () {
                return [
                    Action::value('csv')->label('Exportar a CSV')->export('ReporteEntregaAyudasJAF.csv'),
                    Action::value('html')->label('Exportar a HTML')->export('ReporteEntregaAyudasJAF.html'),
                    Action::value('xlsx')->label('Exportar a EXCEL')->export('ReporteEntregaAyudasJAF.xlsx')->styles($this->exportStyles)->widths($this->exportWidths)
                ];
            }),
        ];
    }

    public function getExportStylesProperty()
    {
        return [
            '1'  => ['font' => ['bold' => true, 'size' => 14]],
            'B' => ['font' => ['italic' => false]],
        ];
    }

    public function getExportWidthsProperty()
    {
        return [
            'A' => 10,
            'B' => 60,
        ];
    }
}
