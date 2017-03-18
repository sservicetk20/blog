@extends('front.template.app')

@section('title', 'Main page')

@section('content')


<br><br><br><!--optimizacion poner margen en style-->
<div class="row">
  <div class="wrapper wrapper-content animated fadeInRight">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="text-center m-t-lg">
                          <h1>
                              Bienvenido a CodeWhale
                          </h1>
                          <small>
                              Conoce lo mejor en tegnologia tendremos entradas cada semana.

                          </small>
                      </div>
                  </div>
              </div>
          </div>
    <div class="col-md-8">
      <h3 class="title-front left">Ultimos Articulos</h3>
      <div class="row">
        @foreach($articles as $article)
        <div class="col-md-4">
         <div class="panel panel-default">
             <div class="panel-body block-center">
              <a href="#" class="thumbnail">
              @foreach($article->images as $image)
                  <img class="img-responsive img-article" width="200" src="/blog/public/images/articles/{{ $image->name }}">
              @endforeach
              </a>
              <h3 class="text-center">{{ $article->title }}</h3>
              <hr>
              <i class="fa fa-folder-open-o"></i><a href="">{{ $article->category->name }}</a>
              <div class="pull-right">
                  <i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
              </div>
            </div>
           </div>
          </div>
          @endforeach
         </div>
         {!! $articles->render() !!}
         </div>
        </div>

@endsection
