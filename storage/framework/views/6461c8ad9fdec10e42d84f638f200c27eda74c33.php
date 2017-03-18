<?php $__env->startSection('title', 'Main page'); ?>

<?php $__env->startSection('content'); ?>


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
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
         <div class="panel panel-default">
             <div class="panel-body block-center">
              <a href="#" class="thumbnail">
              <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <img class="img-responsive img-article" width="200" src="/blog/public/images/articles/<?php echo e($image->name); ?>">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </a>
              <h3 class="text-center"><?php echo e($article->title); ?></h3>
              <hr>
              <i class="fa fa-folder-open-o"></i><a href=""><?php echo e($article->category->name); ?></a>
              <div class="pull-right">
                  <i class="fa fa-clock-o"></i> <?php echo e($article->created_at->diffForHumans()); ?>

              </div>
            </div>
           </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
         <?php echo $articles->render(); ?>

         </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.template.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>