<style>
    .page-break {
        page-break-after: always;
    }

    .page1 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11;
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 60px;
        margin-right: 60px;
        text-align: justify;
        line-height: 1.5em;
    }

    .page2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12;
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 60px;
        margin-right: 60px;
        text-align: justify;
        line-height: 1.5em;
    }

    .page3 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11;
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: 60px;
        margin-right: 60px;
        text-align: justify;
        line-height: 1.5em;
    }
</style>
<div class="page1">
    Yo, <strong>{{ $liquidaciones->empleado_nombres }} {{ $liquidaciones->empleado_apellidos }}</strong>, mayor de edad, de nacionalidad salvadoreña, <strong>{{ $liquidaciones->empleado_ocupacion }}</strong>, del domicilio de {{ $liquidaciones->empleado_municipio }}, departamento de {{ $liquidaciones->empleado_departamento }}, con Documento Único de identidad número {{ $empleado_dui_letras }}, por medio del presente documento OTORGO: AMPLIO Y SUFICIENTE FINIQUITO a favor del INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL, Institución a la cual estoy vinculado(a) desde el {{ $fecha_ingreso_empleado_letras }}, como consecuencia de lo anterior HAGO CONSTAR: que el  INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL (ISRI) no me adeuda ninguna suma de dinero en concepto de pago por las prestaciones económicas contempladas en el Laudo Arbitral que rige la relación laboral entre el ISRI y sus empleados, representados en el mismo por SITRAISRI para el período comprendido del uno de enero al treinta y uno de diciembre del año dos mil veintiuno. Así mismo HAGO CONSTAR: Que no tengo nada que reclamarle al INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL referente a prestaciones económicas y sociales durante el período comprendido del uno de enero al treinta y uno de diciembre de dos mil veintiuno, como consecuencia lo declaro libre y solvente de toda obligación derivada de dicho Laudo Arbitral y exento de toda responsabilidad para conmigo, extendiéndole amplio y total FINIQUITO. En fe de lo dicho, firmo el presente documento en la ciudad de {{ $lugar_firma }} a los {{ $fecha_firma }}.

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    En la Ciudad de {{ $lugar_firma }} a las {{ $hora_firma }}, del día {{ $fecha_firma1 }}. Ante mí, HERBERT DE JESUS SOLANO ARGUETA, Notario, del domicilio de San Salvador, comparece {{ $liquidaciones->empleado_nombres }} {{ $liquidaciones->empleado_apellidos }}, mayor de edad, de nacionalidad salvadoreña, {{ $liquidaciones->empleado_ocupacion }}, del domicilio de {{ $liquidaciones->empleado_municipio }}, Departamento de {{ $liquidaciones->empleado_departamento }}, portador de mi Documento Único de Identidad número {{ $empleado_dui_letras }}, y ME DICE: Que reconoce como suya la firma puesta en el anterior documento por medio del cual extiende AMPLIO Y SUFICIENTE FINIQUITO, a favor del INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL – ISRI, del domicilio de {{ $liquidaciones->empleado_municipio }} en el departamento de {{ $liquidaciones->empleado_departamento }}, institución con la cual me dice que está vinculado(a) desde el día {{ $fecha_ingreso_empleado_letras }} y que literalmente dice “””””” Yo, {{ $liquidaciones->empleado_nombres }} {{ $liquidaciones->empleado_apellidos }}, mayor de edad, de nacionalidad salvadoreña, {{ $liquidaciones->empleado_ocupacion }}, del domicilio de  {{ $liquidaciones->empleado_municipio }}, departamento de {{ $liquidaciones->empleado_departamento }}, con Documento Único de identidad número {{ $empleado_dui_letras }}, por medio del presente documento OTORGO: AMPLIO Y SUFICIENTE FINIQUITO a favor del INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL, Institución a la cual estoy vinculado desde el {{ $fecha_ingreso_empleado_letras }}, como consecuencia de lo anterior HAGO CONSTAR: que el  INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL (ISRI) no me adeuda ninguna suma de dinero en concepto de pago por las prestaciones económicas contempladas en el Laudo Arbitral que rige la relación laboral entre el ISRI y sus empleados, representados por el SITRAISRI para el período comprendido del uno de enero al treinta y uno de diciembre del año dos mil veintiuno. Así mismo HAGO CONSTAR: Que no tengo nada que reclamarle al INSTITUTO SALVADOREÑO DE REHABILITACION INTEGRAL, referente a prestaciones económicas y sociales durante el período comprendido del uno de enero al treinta y uno de diciembre de dos mil veintiuno, como consecuencia lo declaro libre y solvente de toda obligación derivada de dicho Laudo Arbitral y exento de toda responsabilidad para conmigo, extendiéndole amplio y total FINIQUITO”””””” Así se expresó el (la) compareciente a quien le expliqué los efectos legales de esta acta notarial, escrita en una hoja de papel simple y que comienza al pie del anterior documento. Y leído que le fue por mi todo lo escrito en un solo acto sin interrupción, ratifica su contenido y firmamos DOY FE. -
</div>
<div class="page-break"></div>
<div class="page2">
    <h2 style="text-align: right">Por ${{ $liquidaciones->monto_bruto_compensacion }}</h2>
    <p style="margin-top: 60px;">
        Yo, <strong>{{ $liquidaciones->empleado_nombres }} {{ $liquidaciones->empleado_apellidos }}</strong> con Documento Único de Identidad número: {{ $empleado_dui_letras }}, hago constar que he recibo en este acto la cantidad de: {{ $bono_letras }}, en concepto de pago por compensación económica correspondiente al año dos mil veintiuno de los acuerdos pactados entre la Administración del Instituto Salvadoreño de Rehabilitación Integral – ISRI, quien representa el interés del Instituto y de todos sus empleados.
    </p>
    <p style="margin-top: 100px;">
        F._________________________________
    </p>

    <br>
    <br>
    <br>
    <p style="font-size: 11px;">
        EL SUSCRITO NOTARIO DA FE: Que la firma que calza el anterior documento y que se lee “ilegible” es AUTENTICA por haber sido puesta a mi presencia de su puño y letra por {{ $liquidaciones->empleado_nombres }} {{ $liquidaciones->empleado_apellidos }}, mayor de edad, {{ $liquidaciones->empleado_ocupacion }} del domicilio de {{ $liquidaciones->empleado_municipio }} departamento de {{ $liquidaciones->empleado_departamento }}, persona a quien no conozco pero identifico legalmente por medio de su Documento Único Identidad número {{ $empleado_dui_letras }}, en la ciudad de {{ $lugar_firma }}, a los {{ $fecha_firma }}.
    </p>
</div>
