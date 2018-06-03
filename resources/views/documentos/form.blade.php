@extends('layouts.app')
@section('title', 'Formulario Documunetos')

@section('content')
	
	<div>
		<div class="col-md-6 offset-md-3"><h3>Subir Archivos</h3></div>

		<form action="{{ $next }}" method="POST" id="formDocumentos" enctype="multipart/form-data">
			{{ csrf_field() }}
			@if($documento){{ method_field('PUT') }}@endif
			
			<div class="col-md-6 offset-md-3">
				<label>Nombre del Archivo</label>
				<div>
					<div class="{{ $errors->has('nombre') ? 'alert-danger' : (old('nombre') ? 'alert-success' : '') }}"></div>
					<input class="form-control" id="nombre" type="text" name="nombre" value="{{ old('nombre')?: ($documento ? $documento->nombre : '') }}">
				</div>
				@if ($errors->has('nombre'))
                    <p class="alert alert-danger" role="alert">{{ $errors->first('nombre') }}</p>
                @endif
			</div>
			<div class="col-md-6 offset-md-3">
				<label>Numero de Formato</label>
				<div>
					<div class="{{ $errors->has('num_formato') ? 'alert-danger' : (old('num_formato') ? 'alert-success' : '') }}"></div>
					<input class="form-control" id="num_formato" type="number" name="num_formato" value="{{ old('num_formato')?: ($documento ? $documento->num_formato : '') }}">
				</div>
				 @if ($errors->has('num_formato'))
                    <p class="alert alert-danger" role="alert">{{ $errors->first('num_formato') }}</p>
                @endif
			</div>
			<div  class="col-md-6 offset-md-3">
				<label>Periodo: </label>
				<div>
					<div class="{{ $errors->has('periodo') ? 'alert-danger' : (old('periodo') ? 'alert-success' : '') }}"></div>
                            <select class="form-control" name="periodo" role="alert">
                                <option value="">Selecciona una opción</option>
                                @foreach ($periodo as $period)
                                    <option value="{{ $period->id }}" @if (($documento && $documento->id_periodo == $period->id) || (old('periodo') == $period->id)) selected @endif>
                                        {{ $period->periodo }}
                                    </option>
                                @endforeach
                            </select>
                    @if ($errors->has('periodo'))
                        <p class="alert alert-danger" role="alert">{{ $errors->first('periodo') }}</p>
                    @endif
				</div>
			</div><br><br>
			<div class="col-md-6  offset-md-5">
				<div>
					<span class="archivo">
						<input type="file" name="archivo" id="archivo">
					</span>
					<label for="archivo">
						<span><i class="fas fa-upload"></i> {{ $documento && $documento->archivo ? $documento->archivo : 'Subir Archivo' }} </span>
					</label>

				</div>
			</div><br><br>
			<div class="col-md-6 offset-md-5">
				<a class="btn btn-primary" href=" {{ route('documentos.index') }} ">Cancelar</a>
				<input class="btn btn-primary" type="submit" value="Guardar">
			</div>
		</form>
			
	</div>

@endsection
@section('extra-js')
<script type="text/javascript">
        jQuery('input[type="file"]').change(function(){
     var filename = jQuery(this).val().split('\\').pop();
     var idname = jQuery(this).attr('id');
     console.log(jQuery(this));
     console.log(filename);
     console.log(idname);
     jQuery('span.'+idname).next().find('span').html(filename);
    });
</script>
@endsection