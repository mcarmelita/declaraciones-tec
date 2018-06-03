@extends('layouts.app')
@section('title', 'Documentos')

@section('content')

	<a class="btn btn-primary" role="button" href=" {{ route('documentos.create') }} ">Subir Archivo</a><br><br><br>

	@if(count($documento))
		<div>
			<table class="table" id="myTable">
				<thead class="thead-dark">
					<tr>
						<th>N° Formato</th>
						<th>Area</th>
						<th>Nombre Formato</th>
						<th>Periodo</th>
						<th>Archivo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($documento as $documento)<!--recorre el arreglo que trae todos los documentos y demas información-->
						<tr>
							<td><a href=""></a> {{ $documento->num_formato }} </td><!--obtiene los atributos de la columna numformato-->
							<td> {{ $documento->users ? $documento->users->name : ' '}} </td>
							<td> {{ $documento->nombre }} </td>
							<td> {{ $documento->periodos ? $documento->periodos->periodo : '' }} </td>
							<td> {{ $documento->archivo }} </td>
							<td>
								<a style="text-decoration: none; color:black;" title="Editar" href="{{ route('documentos.edit', $documento) }}"><i class="fas fa-edit"></i></a>
								<a title="Eliminar" class="btnEliminar" data-id="{{ $documento->id }}" data-nombre="{{ $documento->nombre }}"><i class="fas fa-trash-alt"></i></a>
								<a style="text-decoration: none; color:black;" title="Descargar" href="/documentos2/{{$documento->archivo}}" download><i class="fas fa-download"></i></a>
								@php $extensionesNavegador = array('gif', 'png', 'jpg', 'jpeg', 'pdf', 'txt'); @endphp
								@if (in_array(pathinfo($documento->archivo, PATHINFO_EXTENSION), $extensionesNavegador))
								<a style="text-decoration: none; color:black;" href="/documentos2/{{$documento->archivo}}" title="ver archivo"><i class="fas fa-eye"></i></a>
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<form method="post" id="formDelete">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
		</form>
	@else
		<div>No se encuentran documentos</div>
	@endif

@endsection

@section('extra-js')
	<script>
		urlBase = '{{ route('documentos.index') }}'
		$('.btnEliminar').click(function() {
			let id = $(this).attr('data-id')
			let nombre = $(this).attr('data-nombre')

			if (confirm(`¿Seguro que desea eliminar el archivo ${nombre}?`)) {
				urlForm = `${urlBase}/${id}` // interpolación (altgr + }) => .../documentos/1
				// urlForm = urlBase + '/' + id // concatenación
				$('#formDelete').attr('action', urlForm)
				$('#formDelete').submit()
			}
		})
	</script>
@endsection