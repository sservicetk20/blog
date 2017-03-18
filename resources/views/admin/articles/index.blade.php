@extends('admin.template.main')

@section('title','Lista de Articulos')

@yield('title-panel')


@section('content')

<a href="{{ route('articles.create') }}"><i class="material-icons">person_add</i></a>

<!--BUSCADOR DE TAGS-->

{!! Form::open(['route' => 'articles.index', 'method' =>'GET','class'=>'navbar-form pull-right']) !!}
  <div class="form-group has-primary">
  {!! Form::label('title','Buscador',['class'=>'control-label','for'=> 'inputSuccess']) !!}
  {!! Form::text('title', null, [
    'class' => 'form-control','placeholder' => 'Buscar Articulos...']) !!}
  </div>
{!! Form::close() !!}
<!---->

  <hr>

  <table class="table table-striped">
  	<thead>
  		<th>ID</th>
  		<th>Titulo</th>
  		<th>Categoria</th>
  		<th>User</th>
  		<th>Acción</th>
  	</thead>
  	<tbody>
  		@foreach($articles as $article)
  		<tr>
  		 <td>{{ $article->id }}</td>
  		 <td>{{ $article->title }}</td>
  		 <td>{{ $article->category->name }}</td>
  		 <td>{{ $article->user->name }}</td>
  			<td>
  			<a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr>
  		@endforeach
  	</tbody>
  </table>
    {!! $articles->render() !!}
@endsection