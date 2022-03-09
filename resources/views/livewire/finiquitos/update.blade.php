<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Finiquito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="empleado_nombres"></label>
                <input wire:model="empleado_nombres" type="text" class="form-control" id="empleado_nombres" placeholder="Empleado Nombres">@error('empleado_nombres') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_apellidos"></label>
                <input wire:model="empleado_apellidos" type="text" class="form-control" id="empleado_apellidos" placeholder="Empleado Apellidos">@error('empleado_apellidos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_fecha_ingreso"></label>
                <input wire:model="empleado_fecha_ingreso" type="text" class="form-control" id="empleado_fecha_ingreso" placeholder="Empleado Fecha Ingreso">@error('empleado_fecha_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_dui"></label>
                <input wire:model="empleado_dui" type="text" class="form-control" id="empleado_dui" placeholder="Empleado Dui">@error('empleado_dui') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="monto_bruto_compensacion"></label>
                <input wire:model="monto_bruto_compensacion" type="text" class="form-control" id="monto_bruto_compensacion" placeholder="Monto Bruto Compensacion">@error('monto_bruto_compensacion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_municipio"></label>
                <input wire:model="empleado_municipio" type="text" class="form-control" id="empleado_municipio" placeholder="Empleado Municipio">@error('empleado_municipio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_departamento"></label>
                <input wire:model="empleado_departamento" type="text" class="form-control" id="empleado_departamento" placeholder="Empleado Departamento">@error('empleado_departamento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="empleado_ocupacion"></label>
                <input wire:model="empleado_ocupacion" type="text" class="form-control" id="empleado_ocupacion" placeholder="Empleado Ocupacion">@error('empleado_ocupacion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="carpeta_centro"></label>
                <input wire:model="carpeta_centro" type="text" class="form-control" id="carpeta_centro" placeholder="Carpeta Centro">@error('carpeta_centro') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="esta_en_litigio"></label>
                <input wire:model="esta_en_litigio" type="text" class="form-control" id="esta_en_litigio" placeholder="Esta En Litigio">@error('esta_en_litigio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_firma"></label>
                <input wire:model="fecha_firma" type="text" class="form-control" id="fecha_firma" placeholder="Fecha Firma">@error('fecha_firma') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="hora_firma"></label>
                <input wire:model="hora_firma" type="text" class="form-control" id="hora_firma" placeholder="Hora Firma">@error('hora_firma') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
