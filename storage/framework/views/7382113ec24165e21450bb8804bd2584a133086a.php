<?php $__env->startSection('title','Lista de Usuarios'); ?>

<?php echo $__env->yieldContent('title-panel'); ?>


<?php $__env->startSection('content'); ?>


      
<a href="<?php echo e(route('users.create')); ?>"><i class="material-icons">person_add</i></a>

<table class="table table-striped table-hover">
  <thead>
  	<th>ID</th>
  	<th>Nombre</th>
  	<th>Tipo</th>
  	<th>Acción</th>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  		<tr>
  			<td><?php echo e($user->id); ?></td>
  			<td><?php echo e($user->name); ?></td>
  			<td><?php echo e($user->email); ?></td>
  			<td>
  		<?php if($user->type == "admin"): ?>
  			 <span class="label label-danger">
  				<?php echo e($user->type); ?>

  			 </span>
  			<?php else: ?>
  			 <span class="label label-primary">
  				<?php echo e($user->type); ?>

  			 </span>
  		<?php endif; ?>
  			</td>
  			<td>
          <a href="<?php echo e(route('users.destroy', $user->id)); ?>" onclick="return confirm('¿Seguro deseas iliminarlo')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          <a href="<?php echo e(route('users.edit', $user->id)); ?>" 
          class="btn btn-warning glyphicon glyphicon-cog"></a>
        </td>	
  		</tr>
  	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo $users->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>