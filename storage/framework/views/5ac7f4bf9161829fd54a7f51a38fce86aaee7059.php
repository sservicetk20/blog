<?php $__env->startSection('title','Lista de Articulos'); ?>

<?php echo $__env->yieldContent('title-panel'); ?>


<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('articles.create')); ?>"><i class="material-icons">person_add</i></a>

<!--BUSCADOR DE TAGS-->

<?php echo Form::open(['route' => 'articles.index', 'method' =>'GET','class'=>'navbar-form pull-right']); ?>

  <div class="form-group has-primary">
  <?php echo Form::label('title','Buscador',['class'=>'control-label','for'=> 'inputSuccess']); ?>

  <?php echo Form::text('title', null, [
    'class' => 'form-control','placeholder' => 'Buscar Articulos...']); ?>

  </div>
<?php echo Form::close(); ?>

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
  		<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<tr>
  		 <td><?php echo e($article->id); ?></td>
  		 <td><?php echo e($article->title); ?></td>
  		 <td><?php echo e($article->category->name); ?></td>
  		 <td><?php echo e($article->user->name); ?></td>
  			<td>
  			<a href="<?php echo e(route('articles.destroy', $article->id)); ?>" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
        <a href="<?php echo e(route('articles.edit', $article->id)); ?>" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr>
  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  	</tbody>
  </table>
    <?php echo $articles->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>