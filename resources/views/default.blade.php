@extends('layouts.app')
@section('title', __('Reporte de Solicitudes Procesadas'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            Reporte de Entrega de Ayudas Técnicas ISRI & Joni and Friends
                        </div>
                        <div class="card-body">
                            <livewire:ficha-datatables searchable="fichas.id, fichas.nombre" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

