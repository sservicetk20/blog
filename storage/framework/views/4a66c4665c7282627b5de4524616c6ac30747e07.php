<?php if(count($errors) > 0): ?>
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 		<a href="javascript:void(0)" class="alert-link"><?php echo e($error); ?><br></a> 
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
<?php endif; ?>