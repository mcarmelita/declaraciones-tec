@extends('layouts.app')
@section('title', 'Documentos')

@section('content')

	<a class="btn btn-primary" role="button" href=" {{ route('documento.create') }} ">Subir Archivo</a><br><br><br>

	@if(count($documentos))
		<div>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>N° Formato</th>
						<th>Area</th>
						<th>Nombre Formato</th>
						<th>Periodo</th>
						<th>Archivo</th>
					</tr>
				</thead>
				<tbody>
					@foreach($documentos as $documento)<!--recorre el arreglo que trae todos los documentos y demas información-->
						<tr>
							<td><a href=""></a> {{ $documento->num_formato }} </td><!--obtiene los atributos de la columna numformato-->
							<td> {{$documento->users ? $documento->users->name : ''}} </td>
							<td> {{ $documento->nombre }} </td>
							<td> {{ $documento->periodo }} </td>
							<td><a href="/documentos/{{$documento->archivo}}" download> {{ $documento->archivo }} </a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@else
		<div>No se encuentran documentos</div>
	@endif

@endsection