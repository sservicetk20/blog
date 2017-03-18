@extends('admin.template.main')

@section('title','Lista de Tags')

@yield('title-panel')


@section('content')


<a href="{{ route('tags.create') }}"><i class="material-icons">person_add</i></a>

<!--BUSCADOR DE TAGS-->

{!! Form::open(['route' => 'tags.index', 'method' =>'GET','class'=>'navbar-form pull-right']) !!}
  <div class="form-group has-primary">
  {!! Form::label('name','Buscador',['class'=>'control-label','for'=> 'inputSuccess']) !!}
  {!! Form::text('name', null, [
    'class' => 'form-control','placeholder' => 'Buscar tag...']) !!}
  </div>
{!! Form::close() !!}
<!---->

  <hr>
<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre del Tags</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	@foreach($tags as $tag)
  		<tr>
  			<td>{{ $tag->id }}</td>
  			<td>{{ $tag->name }}</td>
  			<td>
  			<a href="{{ route('tags.destroy', $tag->id) }}" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr> 
  	@endforeach
  </tbody>
</table>
{!! $tags->render() !!}
@endsection