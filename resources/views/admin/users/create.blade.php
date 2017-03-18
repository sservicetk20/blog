@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

	{!! Form::open(['route' => 'users.store','method' => 'POST']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		{!! Form::password('password', ['class' => 'form-control','placeholder' => '**********']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'Tipo') !!}
		{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'],null , ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
		<a class="navbar-right margin-link" href="{{route('users.index')}}">Volver al modulo de Usuarios</a>
	</div>

	{!! Form::close() !!}

@endsection