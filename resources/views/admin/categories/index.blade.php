@extends('admin.template.main')

@section('title','Lista de Categorias')

@yield('title-panel')


@section('content')


<a href="{{ route('categories.create') }}"><i class="material-icons">person_add</i></a>

<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre de la categoria</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	@foreach($categories as $category)
  		<tr>
  			<td>{{ $category->id }}</td>
  			<td>{{ $category->name }}</td>
  			<td>
  			<a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr> 
  	@endforeach
  </tbody>
</table>
{!! $categories->render() !!}
@endsection