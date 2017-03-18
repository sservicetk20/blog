<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>Blog - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Animation CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" />

</head>

<body>
<body id="page-top">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar">hola</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WEBAPPLAYERS</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Features</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testimonials</a></li>
                        <li><a class="page-scroll" href="#pricing">Pricing</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </nav>
</div>
    <!-- Main view  -->
    <div class="container-index">
     <div class="row">
     <div class="col-md-9 col-md-offset-1">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
   </div>
  <div>

</body>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/inspinia.js"></script>
</html>
