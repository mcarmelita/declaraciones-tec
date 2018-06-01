@extends('layouts.app')
@section('title', 'Formulario Documunetos')

@section('content')
	
	<div>
		<h3>Subir Archivos</h3>

		<form action=" {{ route('documento.store', compact('users')) }} " method="POST" id="formDocumentos" enctype="multipart/form-data">
			{{ csrf_field() }}
			
			<div>
				<label>Nombre del Archivo</label>
				<div>
					<input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}">
				</div>
			</div>
			<div>
				<label>Numero de Formato</label>
				<div>
					<input id="num_formato" type="number" name="num_formato" value="{{ old('num_formato') }}">
				</div>
			</div>
			<div>
				<div>Archivos</div>
				<div>
					<label for="archivo">
						<input type="file" name="archivo">
						
					</label>
				</div>
			</div>
			<div>
				<label>Area: </label>
				<div>
					<select class="letra" id="users" name="users">
						<option value="">Selecciona una area</option>
						@foreach($users as $users)
							<option value="{{ $users->id }}">
								{{ $users->name }}							
							</option>
						@endforeach
					</select>
				</div>
			</div>
			<div>
				<label>Periodo: </label>
				<div>
					<select class="letra" id="periodo" name="periodo">
						<option value="">Selecciona un periodo</option>
						<option value="enero-marzo">enero-marzo</option>
						<option value="abril-junio">abril-junio</option>
						<option value="julio-septiembe">julio-septiembe</option>
						<option value="octubre-diciembre">octubre-diciembre</option>
					</select>
				</div>
			</div>
			<div>
				<a href=" {{ route('documento.index') }} ">Cancelar</a>
				<input type="submit" value="Guardar">
			</div>
		</form>
			
	</div>

@endsection