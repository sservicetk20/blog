@extends('admin.template.main')

@section('content')
	{!! Form::open(['route' => 'articles.store','method' => 'POST', 'files' => true]) !!}

	<div class="form-group">
		{!! Form::label('title','Titulo') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo ...', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('category_id', 'Categoria')!!}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category' ,'required']) !!}
	</div>

	<div class="form-group-">
		{!! Form::label('content', 'Contenido') !!}
		{!! Form::textarea('content','Ingresa el Contenido del Articulo', ['class' => 'form-control textarea-content']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('tags', 'Tags')!!}
		{!! Form::select('tags[]', $tags, null, ['tags' => 'id', 'class' => 'form-control select-tag','multiple','required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('image', 'Imagen') !!}
		{!! Form::file('image', null, ['class' => 'fileImage']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Agregar articulos', ['class'=>'btn btn-raised btn-info']) !!}
	</div>
	
	{!! Form::close() !!}

@endsection

@section('js')
 <script>
	$('.select-tag').chosen({
		placeholder_text_multiple: 'Selecione Maximo Tres Tags',
		max_selected_options: 3,
		search_constains: true,
		no_results_txt: 'No Se Encontranron Estos Tags'

	});

	$('.select-category').chosen({
		placeholder_text_single: 'Selecione Una Categoria',
	});

	$('.textarea-content').trumbowyg();
 </script>
@endsection