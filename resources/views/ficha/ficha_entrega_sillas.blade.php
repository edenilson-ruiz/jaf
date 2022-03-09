<style>
    .page-break {
        page-break-after: always;
    }

    .page1 {
        font-size: 10;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 40px;
        margin-right: 40px;
        text-align: justify;
        line-height: 1.2em;
    }

    .page2 {
        font-size: 10;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 40px;
        margin-right: 40px;
        text-align: justify;
        line-height: 1.2em;
    }

    .page3 {
        font-size: 11;
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 60px;
        margin-right: 60px;
        text-align: justify;
        line-height: 1.5em;
    }

    * {
        font-size: x-small;
    }

    th {
        background-color: #f7f7f7;
        border-color: #959594;
        border-style: solid;
        border-width: 1px;
        margin: 2pt;
        padding: 2pt
    }

    td {
        margin: 2pt;
        padding: 2pt
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .text-left {
        text-align: left;
    }

    .bordered td {
        border-color: #959594;
        border-style: solid;
        border-width: 1px;
    }

    table {
        border-collapse: collapse;
    }

    .border-bottom {
        border-bottom: 1px solid black;
    }

    /* Para sobrescribir lo que está en div-table.css */
    .divTableCell,
    .divTableHead {
        padding: 5px !important;
        border: 0px !important;
        margin: 5px;
    }

    /* DivTable.com */
    .divTable {
        display: table;
        /* width: 100%; */
    }

    .divTableRow {
        display: table-row;
    }

    .divTableHeading {
        background-color: #eee;
        display: table-header-group;
    }

    .divTableCell,
    .divTableHead {
        border: 1px solid #999999;
        display: table-cell;
        padding: 3px 10px;
    }

    .divTableHeading {
        background-color: #eee;
        display: table-header-group;
        font-weight: bold;
    }

    .divTableFoot {
        background-color: #eee;
        display: table-footer-group;
        font-weight: bold;
    }

    .divTableBody {
        display: table-row-group;
    }

    body {
        font-family: 'sans-serif';
    }

    .row {
        width: 100%;
    }

    .column,
    .columns {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .medium-1 {
        width: 8.3333333333%;
    }

    .medium-2 {
        width: 16.6666666667%;
    }

    .medium-3 {
        width: 25%;
    }

    .medium-4 {
        width: 33.3333333333%;
    }

    .medium-5 {
        width: 41.6666666667%;
    }

    .medium-6 {
        width: 50%;
    }

    .medium-7 {
        width: 58.3333333333%;
    }

    .medium-8 {
        width: 66.6666666667%;
    }

    .medium-9 {
        width: 75%;
    }

    .medium-10 {
        width: 83.3333333333%;
    }

    .medium-11 {
        width: 91.6666666667%;
    }

    .medium-12 {
        width: 100%;
    }

    span {
        font-weight: bold;
    }

    p {
        margin: 0;
    }

</style>
<div class="page1">
    <div class="divTable">
        <div class="divTableBody">
            <div class="divTableRow">
                <div class="divTableCell">
                    <table width="100%">
                        <tr>
                            <td width=""><img src="{{ public_path() . '/imgs/logo_isri.png' }}" width="100"
                                    height="100" /></td>
                            <td width="">INSTITUTO SALVADOREÑO DE REHABILITACIÓN INTEGRAL</td>
                            <td width=""><img src="{{ public_path() . '/imgs/jaf_logo.jpg' }}" width="100"
                                    height="100" /></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">
                    <table class="bordered" width="100%">
                        <tr>
                            <th class="text-right">N° de solicitud</th>
                            <td class="text-center border-bottom">{{ $ficha->id }}</td>
                            <th class="text-right" width="100">Fecha de la cita</th>
                            <td class="text-center border-bottom" width="100"> {{ $ficha->fecha_cita }}</td>
                            <td rowspan="2" class="text-center">
                                <img src="{{ public_path() . '/' . $ficha->photo }}" alt="" width="200" height="200">
                                {{ {{ public_path() . '/' . $ficha->photo }}
                            </td>
                        </tr>
                        <tr>
                            <th class="text-right"> Tipo de Ayuda Técnica</th>
                            <td class="text-center border-bottom" width="100"> {{ $ficha->tipo_de_silla }}</td>
                            <th class="text-right" width="100">Sexo</th>
                            <td class="text-center border-bottom" width="100"> {{ $ficha->sexo }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">
                    <h1>FICHA TÉCNICA</h1>
                    <table class="bordered">
                        <tr>
                            <th class="text-left">Numero de póliza</th>
                            <td colspan="3">{{ $ficha->poliza_de_silla }}</td>
                        </tr>
                        <tr>
                            <th class="text-left">Fecha Ingreso de la solicitud</th>
                            <td colspan="3">{{ $ficha->fecha_ingreso_solicitud }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="100">Nombre</th>
                            <td colspan="3">{{ $ficha->nombre }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="120">Edad</th>
                            <td width="100">{{ $ficha->edad }}</td>
                            <th class="text-left" width="120">Fecha de Nacimiento</th>
                            <td width="100">{{ $ficha->fecha_nacimiento }}</td>
                        </tr>
                        <tr>
                            <th class="text-left">Dirección</th>
                            <td colspan="3">{{ $ficha->direccion }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="120">Departamento</th>
                            <td width="100">{{ $ficha->departamento->name }}</td>
                            <th class="text-left" width="120">Municipio</th>
                            <td width="100">{{ $ficha->municipio->name }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="120">Telefono Fijo</th>
                            <td width="100">{{ $ficha->telefono_fijo }}</td>
                            <th class="text-left" width="120">Telefono Movil</th>
                            <td width="100">{{ $ficha->telefono_movil }}</td>
                        </tr>
                        <tr>
                            <th class="text-left">Persona, Institución y/o Centro del ISRI que lo refiere</th>
                            <td colspan="3">{{ $ficha->referido_por }}</td>
                        </tr>
                        <tr>
                            <th class="text-left">Diagnóstico de su discapacidad</th>
                            <td colspan="3">{{ $ficha->diagnostico }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="120">Altura en cm</th>
                            <td width="100">{{ $ficha->altura_en_cm }}</td>
                            <th class="text-left" width="120">Peso en kilogramos</th>
                            <td width="100">{{ $ficha->peso_en_kg }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">
                    <h1><b>Para la Silla de Ruedas por favor medir:</b></h1>
                    <table class="bordered">
                        <tr>
                            <th class="text-left" width="150">1. Longitud de la espalda</th>
                            <td width="100">{{ $ficha->longitud_espalda_in }}</td>
                            <th class="text-left" width="150">2. Medida de la cadera a la rodilla</th>
                            <td width="100">{{ $ficha->medida_de_cadera_a_rodilla_in }}</td>
                        </tr>
                        <tr>
                            <th class="text-left" width="150">3. Medida de la rodilla al talon</th>
                            <td width="100">{{ $ficha->medida_de_rodilla_a_talon_in }}</td>
                            <th class="text-left" width="150">4. Medida de la cadera a cadera</th>
                            <td width="100">{{ $ficha->medida_de_cadera_a_cadera_in }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">
                    <h1>Terapistas físicos, por favor responda: </h1>
                    <p>¿Qué silla de ruedas necesita?</p>
                    <table class="bordered" width="100%">
                        <tr>
                            <th width="40%" class="text-left">1. Nivel de independencia del usuario</th>
                            <td width="60%">{{ $ficha->nivel_independencia_usuario }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">2. Silla para</th>
                            <td width="60%">{{ $ficha->silla_para }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">3. Tipo de Respaldo</th>
                            <td width="60%">{{ $ficha->tipo_de_respaldo }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">4. Necesita Soporte de Cabeza</th>
                            <td width="60%">{{ $ficha->necesita_soporte_de_cabeza }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">5. Necesita Soporte para el Tronco</th>
                            <td width="60%">{{ $ficha->necesita_soporte_para_el_tronco }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">6. Tipo de Asiento</th>
                            <td width="60%">{{ $ficha->tipo_de_asiento }}</td>
                        </tr>
                        <tr>
                            <th width="40%" class="text-left">7. Otras observaciones</th>
                            <td width="60%">{{ $ficha->otras_observaciones }}</td>
                        </tr>
                    </table>
                    <p class="text-center" style="margin-top: 50px;">
                        Colonia Costa Rica Avenida Irazú No 181, Salvador, El Salvador, C.A. <br>
                        www.isri.gob.sv - Email: proyectos.extension@isri.gob.sv <br>
                        PBX: (503) 2521-8600 Telefax: (503) 2270-0247
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-break"></div>
<div class="page2">
    <!-- DivTable.com -->
    <div class="divTable">
        <div class="divTableBody">
            <div class="divTableRow">
                <div class="divTableCell">
                    <table width="100%">
                        <tr>
                            <td>Ténico responsable: </td>
                            <td><u> {{ $ficha->tecnico->nombres }} {{ $ficha->tecnico->apellidos }} {{ $ficha->tecnico->ISRI }}</u></td>
                            <td> Teléfono: </h1>
                            </td>
                            <td><u>{{ $ficha->telefono_movil }}</u></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divTableRow">
                <div class="divTableCell">
                    <table class="bordered" width="100%" style="padding: 10px;">
                        <tr>
                            <th width="100" height="30">Datos</th>
                            <th width="200" height="30">Responsable</th>
                            <th width="200" height="30">Usuario</th>
                        </tr>
                        <tr>
                            <th width="100" height="30">Nombre</th>
                            <td width="200" height="30">{{ $ficha->responsable_nombre }}</td>
                            <td width="200" height="30">{{ $ficha->usuario_nombre }}</td>
                        </tr>
                        <tr>
                            <th width="100" height="30">Firma</th>
                            <td width="200" height="30"></td>
                            <td width="200" height="30"></td>
                        </tr>
                        <tr>
                            <th width="100" height="30">N° DUI</th>
                            <td width="200" height="30">{{ $ficha->responsable_dui }}</td>
                            <td width="200" height="30">{{ $ficha->usuario_dui }} </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-center">
                                <h1>He recibido este dia la donación de una silla de rueda proveniente de la Fundación
                                    Joni and Friends, a través del ISRI</h1>
                            </td>
                        </tr>
                    </table>
                    <h1 style="padding-top: 25px;">
                        Dicha donación no ha implicado ningún costo para mí.
                    </h1>
                    <p style="padding-top: 25px; margin-top: 100px;">
                        San Salvador, {{ $dia }} de {{ $mes }} de {{ $anio }}.
                    </p>
                    <p class="text-center" style="margin-top: 650px;">
                        Colonia Costa Rica Avenida Irazú No 181, Salvador, El Salvador, C.A. <br>
                        www.isri.gob.sv - Email: proyectos.extension@isri.gob.sv <br>
                        PBX: (503) 2521-8600 Telefax: (503) 2270-0247
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
