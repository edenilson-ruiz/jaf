@extends('layouts.app')
@section('title', __('Reporte de Solicitudes Procesadas'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="text-info fas fa-file-excel"></i> @yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <livewire:ficha-datatables searchable="fichas.id, fichas.nombre" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
