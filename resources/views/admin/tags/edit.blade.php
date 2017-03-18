@extends('admin.template.main')

@section('title','Editar Categoria' ." ". $tag->name)

@section('content')

	{!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $tag->name, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		<a class="navbar-right margin-link" href="{{route('tags.index')}}">Volver al modulo de Categorias</a>
	</div>

	{!! Form::close() !!}

@endsection