<!-- Modal -->
<div wire:ignore.self class="modal fade space-y-4" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Ficha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="numero_solicitud">Numero Solicitud</label>
                            <input wire:model.defer="numero_solicitud" type="text" class="form-control"
                                id="numero_solicitud">
                            @error('numero_solicitud')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="poliza_de_silla">Poliza De Silla</label>
                            <input wire:model.defer="poliza_de_silla" type="text" class="form-control"
                                id="poliza_de_silla">
                            @error('poliza_de_silla')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tecnico_id">Tecnico Responsable</label>
                            <select wire:model.defer="tecnico_id" type="text" class="form-control" id="tecnico_id"
                                placeholder="">
                                <option value="">---</option>
                                @foreach ($tecnicos as $tecnico)
                                    <option value="{{ $tecnico->id }}">{{ $tecnico->nombres }}
                                        {{ $tecnico->apellidos }} | {{ $tecnico->institucion }}</option>
                                @endforeach
                            </select>
                            @error('tecnico_id')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="photo">Subir fotografia</label>
                            <input type="file" wire:model.defer="photo">
                            @error('photo')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sexo">Sexo</label>
                            <select wire:model.defer="sexo" class="form-control" id="sexo" placeholder="Sexo">
                                <option value="">Seleccione sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            @error('sexo')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_de_silla">Tipo de Ayuda Técnica</label>
                            <select wire:model.defer="tipo_de_silla" class="form-control" id="tipo_de_silla"
                                placeholder="">
                                <option value="">Seleccione tipo</option>
                                <option value="Abierto"> </option>
                                <option value="Adulto">Adulto</option>
                                <option value="Niño">Niño</option>
                                <option value="Silla estandar">Silla estandar</option>
                                <option value="Silla para niños">Silla para niños</option>
                                <option value="Silla deportiva">Silla deportiva</option>
                                <option value="Andadera">Andadera</option>
                                <option value="Muletas">Muletas</option>
                                <option value="Bastones canadienses">Bastones canadienses</option>
                                <option value="Baston 1 punto">Baston 1 punto</option>
                                <option value="Baston 2 puntos">Baston 2 puntos</option>
                                <option value="Baston 3 puntos">Baston 3 puntos</option>
                                <option value="Baston 4 puntos">Baston 4 puntos</option>
                            </select>
                            @error('tipo_de_silla')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fecha_ingreso_solicitud">Fecha Ingreso Solicitud</label>
                            <input wire:model.defer="fecha_ingreso_solicitud" type="date" class="form-control"
                                id="fecha_ingreso_solicitud">
                            @error('fecha_ingreso_solicitud')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input wire:model.defer="nombre" type="text" class="form-control" id="nombre">
                            @error('nombre')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="edad">Edad</label>
                            <input wire:model.defer="edad" type="text" class="form-control" id="edad">
                            @error('edad')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha_nacimiento">Fecha Nacimiento</label>
                            <input wire:model.defer="fecha_nacimiento" type="date" class="form-control"
                                id="fecha_nacimiento" placeholder="Fecha Nacimiento">
                            @error('fecha_nacimiento')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="direccion">Direccion</label>
                            <textarea wire:model.defer="direccion" type="text" class="form-control" id="direccion"
                                rows="4" cols="50"></textarea>
                            @error('direccion')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="departamento">Departamento</label>
                            <select wire:model.lazy="selectedDepartamento" type="text" class="form-control"
                                id="departamento" name="departamento">
                                <option value="">---</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                                @endforeach
                            </select>
                            @error('departamento')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="municipio">Municipio</label>
                            <select wire:model.lazy="selectedMunicipio" type="text" class="form-control"
                                id="municipio" name="departamento">
                                <option value="">---</option>
                                @if (!is_null($municipios))
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('municipio')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono_fijo">Telefono Fijo</label>
                            <input wire:model.defer="telefono_fijo" type="text" class="form-control"
                                id="telefono_fijo">
                            @error('telefono_fijo')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono_movil">Telefono Movil</label>
                            <input wire:model.defer="telefono_movil" type="text" class="form-control"
                                id="telefono_movil">
                            @error('telefono_movil')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="referido_por">Persona, Institución y/o Centro que lo refiere</label>
                            <input wire:model.defer="referido_por" type="text" class="form-control" id="referido_por">
                            @error('referido_por')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="diagnostico">Diagnostico</label>
                            <textarea wire:model.defer="diagnostico" type="text" class="form-control" id="diagnostico"
                                rows="4" cols="10"></textarea>
                            @error('diagnostico')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="altura_en_cm">Altura en cm</label>
                            <input wire:model.defer="altura_en_cm" type="text" class="form-control" id="altura_en_cm">
                            @error('altura_en_cm')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="peso_en_kg">Peso en kilogramos</label>
                            <input wire:model.defer="peso_en_kg" type="text" class="form-control" id="peso_en_kg">
                            @error('peso_en_kg')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="longitud_espalda_in">Longitud de la espalda (pulgadas)</label>
                            <input wire:model.defer="longitud_espalda_in" type="text" class="form-control"
                                id="longitud_espalda_in">
                            @error('longitud_espalda_in')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="medida_de_cadera_a_rodilla_in">Medida de la cadera ea la rodilla
                                (pulgadas)</label>
                            <input wire:model.defer="medida_de_cadera_a_rodilla_in" type="text" class="form-control"
                                id="medida_de_cadera_a_rodilla_in">
                            @error('medida_de_cadera_a_rodilla_in')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="medida_de_rodilla_a_talon_in">Medida de la rodilla al talon (pulgadas)</label>
                            <input wire:model.defer="medida_de_rodilla_a_talon_in" type="text" class="form-control"
                                id="medida_de_rodilla_a_talon_in">
                            @error('medida_de_rodilla_a_talon_in')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="medida_de_cadera_a_cadera_in">Medida de la cadera a cadera (pulgadas)</label>
                            <input wire:model.defer="medida_de_cadera_a_cadera_in" type="text" class="form-control"
                                id="medida_de_cadera_a_cadera_in">
                            @error('medida_de_cadera_a_cadera_in')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nivel_independencia_usuario">Nivel de independencia del usuario</label>
                            <select wire:model.defer="nivel_independencia_usuario" class="form-control"
                                id="nivel_independencia_usuario">
                                <option value="">Seleccione</option>
                                <option value="Dependiente">Dependiente</option>
                                <option value="Semi dependiente">Semi dependiente</option>
                                <option value="Independiente">Independiente</option>
                            </select>
                            @error('nivel_independencia_usuario')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="silla_para">Silla para</label>
                            <select wire:model.defer="silla_para" type="text" class="form-control" id="silla_para">
                                <option value="">Seleccione</option>
                                <option value="Adulto">Adulto</option>
                                <option value="Niño">Niño</option>
                            </select>
                            @error('silla_para')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipo_de_respaldo">Tipo de respaldo</label>
                            <select wire:model.defer="tipo_de_respaldo" type="text" class="form-control"
                                id="tipo_de_respaldo">
                                <option value="">Seleccione</option>
                                <option value="Fijo">Fijo</option>
                                <option value="Respaldo Reclinable">Respaldo Reclinable</option>
                                <option value="Respaldo Reclinable Duro">Respaldo Reclinable Duro</option>
                                <option value="Sistema de Inclinado Respaldo y Asiento">Sistema de Inclinado Respaldo y
                                    Asiento</option>
                            </select>
                            @error('tipo_de_respaldo')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="necesita_soporte_de_cabeza">Necesita soporte de cabeza</label>
                            <select wire:model.defer="necesita_soporte_de_cabeza" type="text" class="form-control"
                                id="necesita_soporte_de_cabeza">
                                <option value="">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                            @error('necesita_soporte_de_cabeza')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="necesita_soporte_para_el_tronco">Necesita soporte para el tronco</label>
                            <select wire:model.defer="necesita_soporte_para_el_tronco" type="text"
                                class="form-control" id="necesita_soporte_para_el_tronco">
                                <option value="">Seleccione</option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                            @error('necesita_soporte_para_el_tronco')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_de_asiento">Tipo de asiento</label>
                            <select wire:model.defer="tipo_de_asiento" type="text" class="form-control"
                                id="tipo_de_asiento">
                                <option value="">Seleccione</option>
                                <option value="Duro">Duro</option>
                                <option value="Blando">Blando</option>
                            </select>
                            @error('tipo_de_asiento')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="otras_observaciones">Otras observaciones</label>
                            <textarea wire:model.defer="otras_observaciones" type="text" class="form-control"
                                rows="5" cols="5" id="otras_observaciones"></textarea>
                            @error('otras_observaciones')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="usuario_nombre">Usuario Nombre</label>
                            <input wire:model.defer="usuario_nombre" type="text" class="form-control"
                                id="usuario_nombre">
                            @error('usuario_nombre')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="usuario_dui">Usuario DUI</label>
                            <input wire:model.defer="usuario_dui" type="text" class="form-control" id="usuario_dui">
                            @error('usuario_dui')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="usuario_parentesco">Usuario Parentesco</label>
                            <input wire:model.defer="usuario_parentesco" type="text" class="form-control"
                                id="usuario_parentesco">
                            @error('usuario_parentesco')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="responsable_dui">Responsable DUI</label>
                            <input wire:model.defer="responsable_dui" type="text" class="form-control"
                                id="responsable_dui">
                            @error('responsable_dui')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="responsable_nombre">Responsable Nombre</label>
                            <input wire:model.defer="responsable_nombre" type="text" class="form-control"
                                id="responsable_nombre">
                            @error('responsable_nombre')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="responsable_parentesco">Responsable Parentesco</label>
                            <input wire:model.defer="responsable_parentesco" type="text" class="form-control"
                                id="responsable_parentesco">
                            @error('responsable_parentesco')
                                <span class="error text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
