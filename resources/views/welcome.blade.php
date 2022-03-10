@extends('layouts.app')
@section('title', __('Bienvenido'))
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><span class="text-center fa fa-home"></span> @yield('title')</h5>
                    </div>
                    <div class="card-body">
                        @guest
                            <h5>
                                {{ __('Bienvenido a') }} {{ config('app.name', 'Laravel') }} !!!
                            </h5>
                        @else
                            <h5>
                                Hola {{ Auth::user()->name }}, Bienvenido de nuevo a {{ config('app.name', 'Laravel') }}.
                            </h5>
                            @endif

                            <p>Herramienta para controlar la entrega de ayudas técnicas a usuarios del ISRI</p>
                            <p>Por favor contacta con el administrador para obtener tus credenciales o presionar Login si ya tienes usuario.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
