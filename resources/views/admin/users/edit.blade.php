@extends('admin.template.main')

@section('title','Editar Usuario' ." ". $user->name)

@section('content')

	{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		{!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'Email']) !!}
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
		{!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
		<a class="navbar-right margin-link" href="{{route('users.index')}}">Volver al modulo de Usuarios</a>
	</div>

	{!! Form::close() !!}

@endsection