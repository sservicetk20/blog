<?php $__env->startSection('title','Editar Usuario' ." ". $user->name); ?>

<?php $__env->startSection('content'); ?>

	<?php echo Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']); ?>


	<div class="form-group">
		<?php echo Form::label('name', 'Nombre'); ?>

		<?php echo Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('email', 'Correo Electronico'); ?>

		<?php echo Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'Email']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('password', 'Contraseña'); ?>

		<?php echo Form::password('password', ['class' => 'form-control','placeholder' => '**********']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::label('type', 'Tipo'); ?>

		<?php echo Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'],null , ['class' => 'form-control']); ?>

	</div>

	<div class="form-group">
		<?php echo Form::submit('Editar',['class' => 'btn btn-primary']); ?>

		<a class="navbar-right margin-link" href="<?php echo e(route('users.index')); ?>">Volver al modulo de Usuarios</a>
	</div>

	<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>