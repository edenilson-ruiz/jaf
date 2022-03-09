@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><span class="text-center fa fa-home"></span> @yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <h5>Hola <strong>{{ Auth::user()->name }},</strong>
                            {{ __(' Estos son los datos que se han procesado hasta el momento en ') }}{{ config('app.name', 'Laravel') }} para este dia {{ date('d/m/Y') }}
                        </h5>
                        </br>
                        <hr>

                        <div class="row w-100">
                            <div class="col-md-3">
                                <div class="card border-info mx-sm-1 p-3">
                                    <div class="card border-info text-info p-3 my-card"><span
                                            class="text-center fa fa-person-booth" aria-hidden="true"></span></div>
                                    <div class="text-info text-center mt-3">
                                        <h4>Citas programadas</h4>
                                    </div>
                                    <div class="text-info text-center mt-2">
                                        <h1>{{ $citas_programadas }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-success mx-sm-1 p-3">
                                    <div class="card border-success text-success p-3 my-card"><span
                                            class="text-center fa fa-person-booth" aria-hidden="true"></span></div>
                                    <div class="text-success text-center mt-3">
                                        <h4>Solicitudes Procesadas</h4>
                                    </div>
                                    <div class="text-success text-center mt-2">
                                        <h1>{{ $solicitudes_procesadas }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-danger mx-sm-1 p-3">
                                    <div class="card border-danger text-danger p-3 my-card"><span
                                            class="text-center fa fa-person-booth" aria-hidden="true"></span></div>
                                    <div class="text-danger text-center mt-3">
                                        <h4>No programadas</h4>
                                    </div>
                                    <div class="text-danger text-center mt-2">
                                        <h1>{{ $sin_cita_cantidad }}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-warning mx-sm-1 p-3">
                                    <div class="card border-warning text-warning p-3 my-card"><span
                                            class="text-center fa fa-users" aria-hidden="true"></span></div>
                                    <div class="text-warning text-center mt-3">
                                        <h4>Users</h4>
                                    </div>
                                    <div class="text-warning text-center mt-2">
                                        <h1>{{ Auth::user()->count() }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        <!--
        function timedRefresh(timeoutPeriod) {
            setTimeout("location.reload(true);",timeoutPeriod);
        }

        window.onload = timedRefresh(30000);

        //   -->
        </script>
@endsection
