<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_solicitud')->nullable();
            $table->string('poliza_de_silla')->nullable();

            $table->unsignedBigInteger('tecnico_id')->nullable();
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');

            $table->string('tipo_de_silla')->nullable();
            $table->char('sexo',10)->nullable();
            $table->date('fecha_ingreso_solicitud')->nullable();
            $table->string('nombre')->nullable();
            $table->string('photo')->nullable();
            $table->integer('edad')->nullable();
            $table->string('foto')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->text('direccion')->nullable();

            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->unsignedBigInteger('municipio_id')->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipios');

            $table->string('telefono_fijo')->nullable();
            $table->string('telefono_movil')->nullable();
            $table->string('referido_por')->nullable();
            $table->string('diagnostico')->nullable();
            $table->decimal('altura_en_cm')->nullable();
            $table->decimal('peso_en_kg')->nullable();
            $table->decimal('longitud_espalda_in')->nullable();

            $table->decimal('medida_de_cadera_a_rodilla_in')->nullable();
            $table->decimal('medida_de_rodilla_a_talon_in')->nullable();
            $table->decimal('medida_de_cadera_a_cadera_in')->nullable();

            $table->string('nivel_independencia_usuario')->nullable();
            $table->string('silla_para')->nullable();
            $table->string('tipo_de_respaldo')->nullable();
            $table->char('necesita_soporte_de_cabeza',2)->nullable();
            $table->char('necesita_soporte_para_el_tronco',2)->nullable();
            $table->string('tipo_de_asiento')->nullable();
            $table->string('otras_observaciones')->nullable();

            $table->string('usuario_nombre')->nullable();
            $table->string('usuario_dui')->nullable();
            $table->string('usuario_parentesco')->nullable();

            $table->string('responsable_nombre')->nullable();
            $table->string('responsable_dui')->nullable();
            $table->string('responsable_parentesco')->nullable();
            $table->date('fecha_cita')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
}
