@section('title', __('Finiquitos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado de Finiquitos </h4>
						</div>
						<div wire:poll.60s>

						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Finiquitos">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Finiquitos
						</div>
					</div>
				</div>

				<div class="card-body">
						@include('livewire.finiquitos.create')
						@include('livewire.finiquitos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<td>#</td>
								<th>Nombres</th>
								<th>Apellidos</th>
								<th>DUI</th>
								<th>Municipio</th>
								<th>Departamento</th>
								<th>Ocupacion</th>
								<th>Carpeta Centro</th>
								<th>¿En Litigio?</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($finiquitos as $row)
							<tr>
								<td>{{ $row->id }}</td>
								<td>{{ $row->empleado_nombres }}</td>
								<td>{{ $row->empleado_apellidos }}</td>
								<td>{{ $row->empleado_dui }}</td>
								<td>{{ $row->empleado_municipio }}</td>
								<td>{{ $row->empleado_departamento }}</td>
								<td>{{ $row->empleado_ocupacion }}</td>
								<td>{{ $row->carpeta_centro }}</td>
								<td>{{ $row->esta_en_litigio }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
                                        <a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>
                                        <a class="dropdown-item" wire:click="download({{$row->id}})"><i class="fa fa-trash"></i> Descargar PDF </a>
                                        {{-- <a class="dropdown-item" onclick="confirm('Confirm Delete Finiquito id {{$row->id}}? \nDeleted Finiquitos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a> --}}
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>
					{{ $finiquitos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
