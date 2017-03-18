@extends('admin.template.main')

@section('title','Editar Categoria' ." ". $category->name)

@section('content')

	{!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $category->name, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		<a class="navbar-right margin-link" href="{{route('categories.index')}}">Volver al modulo de Categorias</a>
	</div>

	{!! Form::close() !!}

@endsection