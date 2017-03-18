@extends('admin.template.main')

@section('title','Lista de Usuarios')

@yield('title-panel')


@section('content')


      
<a href="{{ route('users.create') }}"><i class="material-icons">person_add</i></a>

<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre</th>
  	<th>Tipo</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	@foreach($users as $user)
  		<tr>
  			<td>{{ $user->id }}</td>
  			<td>{{ $user->name }}</td>
  			<td>{{ $user->email }}</td>
  			<td>
  		@if($user->type == "admin")
  			 <span class="label label-danger">
  				{{ $user->type }}
  			 </span>
  			@else
  			 <span class="label label-primary">
  				{{ $user->type }}
  			 </span>
  		@endif
  			</td>
  			<td>
          <a href="{{route('users.destroy', $user->id)}}" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          <a href="{{route('users.edit', $user->id)}}" 
          class="btn btn-warning glyphicon glyphicon-cog"></a>
        </td>	
  		</tr>
  	@endforeach
  </tbody>
</table>
{!! $users->render() !!}
@endsection