<?php $__env->startSection('title','Lista de Categorias'); ?>

<?php echo $__env->yieldContent('title-panel'); ?>


<?php $__env->startSection('content'); ?>


<a href="<?php echo e(route('categories.create')); ?>"><i class="material-icons">person_add</i></a>

<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre de la categoria</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<tr>
  			<td><?php echo e($category->id); ?></td>
  			<td><?php echo e($category->name); ?></td>
  			<td>
  			<a href="<?php echo e(route('categories.destroy', $category->id)); ?>" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-warning glyphicon glyphicon-cog"></a>
  			</td>
  		</tr> 
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $categories->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>