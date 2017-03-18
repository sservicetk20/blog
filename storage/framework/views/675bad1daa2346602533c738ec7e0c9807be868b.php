<?php $__env->startSection('title','Lista de Tags'); ?>

<?php echo $__env->yieldContent('title-panel'); ?>


<?php $__env->startSection('content'); ?>


<a href="<?php echo e(route('tags.create')); ?>"><i class="material-icons">person_add</i></a>

<!--BUSCADOR DE TAGS-->

<?php echo Form::open(['route' => 'tags.index', 'method' =>'GET','class'=>'navbar-form pull-right']); ?>

  <div class="form-group has-primary">
  <?php echo Form::label('name','Buscador',['class'=>'control-label','for'=> 'inputSuccess']); ?>

  <?php echo Form::text('name', null, [
    'class' => 'form-control','placeholder' => 'Buscar tag...']); ?>

  </div>
<?php echo Form::close(); ?>

<!---->

  <hr>
<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre del Tags</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<tr>
  			<td><?php echo e($tag->id); ?></td>
  			<td><?php echo e($tag->name); ?></td>
  			<td>
  			<a href="<?php echo e(route('tags.destroy', $tag->id)); ?>" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
            <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr> 
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $tags->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>