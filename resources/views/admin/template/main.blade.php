<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title','Default') - Panel Admin</title>

     <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <Materiral Design Lite -->
     <!--<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->

    <link rel="stylesheet" href="{{ url('/plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ url('/plugins/trumbowyg/dist/ui/trumbowyg.min.css') }}">

  </head>
  <body>
  @include('partials.nav')
    <section>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-primary">
         <div class="panel-heading">
       <h3 class="panel-title">@yield('title','Default')</h3></div>
       <div class="panel-body">
        @include('flash::message')
        @include('errors.errors')
        @yield('content')
       </div>
      </div>
     </div>
    </div>
    </section>

   <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap-editable/js/bootstrap-editable.min.js"></script>

    <script>
        $.material.init();
    </script>
    <script src="{{ url('/js/app.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{ url('/plugins/chosen/chosen.jquery.js') }}"></script>

    <script src="{{ url('/plugins/trumbowyg/dist/trumbowyg.min.js') }}"></script>

    @yield('js')
  </body>
</html>
