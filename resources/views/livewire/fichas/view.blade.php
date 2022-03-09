@section('title', __('Fichas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Ficha Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5></h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model.debounce.1s='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Fichas">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Add Fichas
						</div>
					</div>
				</div>

				<div class="card-body">
						@include('livewire.fichas.create')
						@include('livewire.fichas.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<th>ID</th>
								<th>Num Solicitud</th>
								<th>Tipo de Ayuda Técnica</th>
								<th>Nombre</th>
								<th>Fecha Actualizacion</th>
								<th>Fecha Cita</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($fichas as $row)
							<tr>
								<td>{{ $row->id }}</td>
								<td>{{ $row->id }}</td>
								<td>{{ $row->tipo_de_silla }}</td>
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->updated_at }}</td>
								<td>{{ $row->fecha_cita }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>
									<a class="dropdown-item" wire:click="download({{$row->id}})"><i class="fa fa-trash"></i> Descargar PDF </a>
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>
					{{ $fichas->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
